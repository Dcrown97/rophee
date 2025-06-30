<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Home;
use App\Models\Location;
use App\Models\Service;
use App\Mail\Messages;
use App\Models\AboutUs;
use App\Models\Department;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    public function index()
    {
        $aboutus = AboutUs::get();
        $services = Service::get();
        $departments = Department::get();
        $faqs = Faq::get();
        $testimonials = Testimonial::get();
        $locations = Location::get();
        $galleries = Gallery::get();
        return view('homepage.index', compact('aboutus', 'services', 'departments', 'faqs', 'testimonials', 'galleries', 'locations'));
    }

    public function contact_us(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'email' => 'required',
                'message' => 'required',
                // 'g-recaptcha-response' => ['required', new ReCaptcha]
            ], [
                // 'g-recaptcha-response.required' => 'Recaptcha is required'
            ]);
            try {
                DB::beginTransaction();
                $contact = new Contact();
                $contact->name = $request->name;
                $contact->email = $request->email;
                $contact->service = $request->service;
                $contact->phone = $request->phone;
                $contact->location = $request->location;
                $contact->message = $request->message;
                $contact->save();
                DB::commit();
                // Send Email
                try {
                    $email = DB::table('locations')->where('name', $request->location)->first() ?? DB::table('locations')->where('type', 'head')->first();
                    // dd($email);
                    // foreach ($emails as $email) {
                    $contact['subject'] = $request->subject;
                    Mail::to($email->email)->send(new Messages($contact));
                    // }
                } catch (\Exception $e) {
                    Log::info('Error sending email: ' . $e->getMessage());
                }
                return back()->with('success', 'Message sent successfully');
            } catch (\Exception $e) {
                return back()->with('error', 'Message sending failed');
            }
        }
    }
}
