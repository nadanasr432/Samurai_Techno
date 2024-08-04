<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Enums\ProjectTypesEnum;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.projects.index', compact('projects'));
    }
    public function devOps()
    {
        $projects = Project::where('type', ProjectTypesEnum::DEVOPS->value)->get();
        return view('dashboard.projects.devOps.index', compact('projects'));
    }

    public function web()
    {
        $projects = Project::where('type', ProjectTypesEnum::WEB->value)->get();
        return view('dashboard.projects.web.index', compact('projects'));
    }

    public function mobile()
    {
        $projects = Project::where('type', ProjectTypesEnum::MOBILE->value)->get();
        return view('dashboard.projects.mobile.index', compact('projects'));
    }

    public function graphic()
    {
        $projects = Project::where('type', ProjectTypesEnum::GRAPHIC->value)->get();
        return view('dashboard.projects.graphic.index', compact('projects'));
    }
    public function list_of_devOps()
    {
        $projects = Project::where('type', ProjectTypesEnum::DEVOPS->value)->get();
        return view('projects.devOps', compact('projects'));
    }

    public function list_of_web()
    {
        $projects = Project::where('type', ProjectTypesEnum::WEB->value)->get();
        return view('projects.web', compact('projects'));
    }

    public function list_of_mobile()
    {
        $projects = Project::where('type', ProjectTypesEnum::MOBILE->value)->get();
        return view('projects.mobile', compact('projects'));
    }

    public function list_of_graphic()
    {
        $projects = Project::where('type', ProjectTypesEnum::GRAPHIC->value)->get();
        return view('projects.graphic', compact('projects'));
    }

    public function list_of_UIUX()
    {
        $projects = Project::where('type', ProjectTypesEnum::UI_UX->value)->get();
        return view('projects.ui_ux', compact('projects'));
    }

    public function testing()
    {
        $projects = Project::where('type', ProjectTypesEnum::TESTING->value)->get();
        return view('dashboard.projects.testing.index', compact('projects'));
    }
    public function list_of_testing()
    {
        $projects = Project::where('type', ProjectTypesEnum::TESTING->value)->get();
        return view('projects.testing', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'type' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Ensure the type is cast to the enum if not already
        $type = ProjectTypesEnum::from($request->input('type'));

        $project = Project::create([
            'name' => $request->input('name'),
            'link' => $request->input('link'),
            'type' => $type,
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('public/images');
            $fileName = $file->getClientOriginalName();
            $fileType = $file->getClientMimeType();
            $fileSize = $file->getSize();

            $project->media()->create([
                'file_name' => $fileName,
                'file_path' => $path,
                'file_type' => $fileType,
                'file_size' => $fileSize,
                'mediable_id' => $project->id,
                'mediable_type' => Project::class,
            ]);
        }

        return redirect()->route('projects.project.index')->with('success', 'Project created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'type' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $project = Project::findOrFail($id);
        $type = ProjectTypesEnum::from($request->input('type'));

        $project->update([
            'name' => $request->input('name'),
            'link' => $request->input('link'),
            'type' => $type,
        ]);

        if ($request->hasFile('image')) {
            // Delete existing media if needed
            $project->media()->delete();

            $file = $request->file('image');
            $path = $file->store('public/images');
            $fileName = $file->getClientOriginalName();
            $fileType = $file->getClientMimeType();
            $fileSize = $file->getSize();

            $project->media()->create([
                'file_name' => $fileName,
                'file_path' => $path,
                'file_type' => $fileType,
                'file_size' => $fileSize,
                'mediable_id' => $project->id,
                'mediable_type' => Project::class,
            ]);
        }

        return redirect()->route('projects.project.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete related media
        $project->media()->delete();

        // Delete the project
        $project->delete();

        // Redirect back with success message
        return back()->with('success', 'Project deleted successfully.');
    }

}
