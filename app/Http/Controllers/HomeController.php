<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Enums\ProjectTypesEnum;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $testing = Project::where('type', ProjectTypesEnum::TESTING->value)->take(6)->get();
        $devOps = Project::where('type', ProjectTypesEnum::DEVOPS->value)->take(6)->get();
        $web = Project::where('type', ProjectTypesEnum::WEB->value)->take(6)->get();
        $mobile = Project::where('type', ProjectTypesEnum::MOBILE->value)->take(6)->get();
        $graphic = Project::where('type', ProjectTypesEnum::GRAPHIC->value)->take(6)->get();
        $ui_ux = Project::where('type', ProjectTypesEnum::UI_UX->value)->take(6)->get();

        return view('sections.app', [
            'contact' => $contact,
            'testing' => $testing,
            'devOps' => $devOps,
            'web' => $web,
            'mobile' => $mobile,
            'graphic' => $graphic,
            'ui_ux' => $ui_ux,
        ]);
    }

  


}
