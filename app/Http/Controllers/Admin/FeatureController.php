<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class FeatureController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $admin_users = Feature::latest();
            return DataTables::of($admin_users)
                ->addIndexColumn()
                ->addColumn('check', function ($row) {
                    return '<input type="checkbox" name="select[]" onclick="checkcheckbox()" id="check_' . $row->id . '" class="check" value="' . $row->id . '">';
                })
                ->addColumn('description', function ($row) {
                    return $row->description;
                })
                ->addColumn('icon', function ($row) {
                    $src = asset('uploads/images/feature/' . $row->icon);
                    return '<img src="' . $src . '" width="60px">';
                })
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->diffForHumans();
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.feature.edit', $row->id), 'row' => $row]);
                    $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.feature.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    return $btn;
                })
                ->rawColumns(['description', 'icon', 'created_at', 'action'])
                ->make(true);
        }
        return view('dashboard.feature.index');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:80',
            'description' => 'required|string',
            'link_title'  => 'nullable|string|max:80',
            'link'        => 'nullable|string|max:191',
            'icon'        => 'required|image|mimes:jpeg,png,PNG,jpg,JPG,svg|max:512',
        ]);

        if ($request->hasFile('icon')) {
            $data['icon'] = imageStore($request, 'icon', 'feature', 'uploads/images/feature/');
        }
        try {
            Feature::create($data);
            return response()->json(['message' => __('app.success-message')], 200);
        } catch (\Exception $e) {
            return response()->json(['message'=>__('app.oops')], 500);
        }
    }

    public function edit(Request $request, Feature $feature)
    {
        if ($request->ajax()) {
            $modal = view('dashboard.feature.edit')->with(['feature' => $feature])->render();
            return response()->json(['modal' => $modal], 200);
        }
        return abort(500);
    }

    public function update(Request $request, Feature $feature)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:80',
            'description' => 'required|string',
            'link_title'  => 'nullable|string|max:80',
            'link'        => 'nullable|string|max:191',
            'icon'        => 'nullable|image|mimes:jpeg,png,PNG,jpg,JPG,svg|max:512',
        ]);
        if ($request->hasFile('icon')) {
            $data['icon'] = imageUpdate($request, 'icon', 'feature', 'uploads/images/feature/', $feature->icon);
        }
        try {
            $feature->update($data);
            return response()->json(['message' => 'Data Successfully Inserted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => __('app.oops')], 500);
        }
    }

    public function destroy(Feature $feature)
    {
        try {
            $checkPath =  public_path('uploads/images/feature/' . $feature->icon);
            if (file_exists($checkPath)) {
                unlink($checkPath);
            }
            $feature->delete();
            return response()->json(['message' => __('app.success-message')], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => __('app.oops')], 500);
        }
    }
}
