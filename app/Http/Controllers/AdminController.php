<?php

namespace App\Http\Controllers;

use App\Mail\AddMail;
use App\Mail\Reset;
use App\Models\AboutUs;
use App\Models\Allow;
use App\Models\Contact;
use App\Models\Mail;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Location;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function dashboard(Request $request)
    {
        $allow_reg = Allow::with('user')->first();
        return view('admin.dashboard', ['allow_reg' => $allow_reg]);
    }

    // allow_reg
    public function allow_reg(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'allow_reg' => 'required'
            ]);

            try {

                if ($request->id != null) {
                    $allow = Allow::find($request->id);
                    $allow->allow_reg = $request->allow_reg;
                    $allow->user_id = Auth::user()->id;
                    $allow->save();
                    return back()->withSuccess('Successful');
                } else {
                    $allow = new Allow();
                    $allow->allow_reg = $request->allow_reg;
                    $allow->user_id = Auth::user()->id;
                    $allow->save();
                    return back()->withSuccess('Successful');
                }
            } catch (\Exception $e) {
                // Log the exception message for debugging
                // \Log::error($e->getMessage());
                return back()->withErrors('Something went wrong');
            }
        }
    }

    public function aboutUs(Request $request)
    {
        if ($request->isMethod('POST')) {
            try {
                DB::beginTransaction();

                // Always use the first AboutUs record or create one if none exists
                $aboutUs = AboutUs::first();

                if ($aboutUs) {
                    $aboutUs->update([
                        'content' => $request->content,
                    ]);
                } else {
                    AboutUs::create([
                        'content' => $request->content,
                    ]);
                }

                DB::commit();
                return back()->withSuccess('About Us updated successfully');
            } catch (\Exception $e) {
                DB::rollBack();
                return back()->withErrors('Something went wrong');
            }
        }

        $aboutus = AboutUs::take(1)->get(); // only fetch one
        return view('admin.aboutus', compact('aboutus'));
    }

    public function locations(Request $request)
    {
        // Fetch all locations for displaying in the view
        $locations = Location::all();

        // Check if it's a POST request (form submission)
        if ($request->isMethod('POST')) {
            try {
                // Use the model to either create or update a location
                Location::updateOrCreate(
                    [
                        'id' => $request->id,
                    ],
                    [
                        'name' => $request->name,
                        'address' => $request->address,
                        'type' => $request->type,
                        'phone' => $request->phone,
                        'phone1' => $request->phone1,
                        'phone2' => $request->phone2,
                        'phone3' => $request->phone3,
                        'phone4' => $request->phone4,
                        'email' => $request->email,
                        'email1' => $request->email1,
                        'email2' => $request->email2,
                        'user_id' => auth()->user()->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );

                return redirect('/admin/locations')->withSuccess('Successful');
            } catch (\Exception $e) {
                return back()->withErrors('Something went wrong');
            }
        }

        return view('admin.locations', ['locations' => $locations]);
    }

    public function edit_location(Request $request)
    {

        $location =  Location::find(base64_decode($request->id));
        return view('admin.edit_location', ['location' => $location]);
    }

    public function services(Request $request)
    {
        $services = Service::all();
        $locations =  Location::all();
        if ($request->isMethod('POST')) {
            try {

                Service::updateOrCreate(
                    [
                        'id' => $request->id,
                    ],
                    [
                        'name' => $request->name,
                        'desc' => $request->desc,
                        // 'branch' => $request->branch,
                        'user_id' => auth()->user()->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
                return redirect('/admin/services')->withSuccess('Successful');
            } catch (\Exception $e) {
                return back()->withError('Something went wrong');
            }
        }

        return view('admin.services', ['services' => $services, 'locations' => $locations]);
    }

    public function edit_service(Request $request)
    {

        $edit_service =  Service::find(base64_decode($request->id));
        return view('admin.edit_service', ['edit_service' => $edit_service]);
    }

    // gallery
    public function galleries(Request $request)
    {
        $sliders = Gallery::all();
        return view('admin.galleries', ['sliders' => $sliders]);
    }

    // slider
    public function upload_image(Request $request)
    {
        if ($request->id) {
            $photo = Gallery::find(base64_decode($request->id));
            // dd($slider);
            if ($request->isMethod('POST')) {
                try {
                    $this->add_photo($request, $photo, "Gallery");
                    return back()->withSuccess('Successful');
                } catch (\Exception $e) {
                    return back()->withErrors('Something went wrong');
                }
            }
            return view('admin.add_image', ['slider' => $photo]);
        } else {

            $new_photo = new Gallery();
            if ($request->isMethod('POST')) {
                try {
                    $this->add_photo($request, $new_photo, 'Gallery');
                    return back()->withSuccess('Successful');
                } catch (\Exception $e) {
                    return back()->withErrors('Something went wrong');
                }
            }
            return view('admin.add_image');
        }
    }

    function add_photo(Request $request, $photo, $folderName)
    {
        $request->validate([
            'photo' => 'required|image',
        ]);

        $photo->desc = $request->desc;
        $photo->user_id = Auth::user()->id;

        // image
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();

            // save the file to the storage disk
            $file->storeAs($folderName, $filename, 'public');

            // save the file path to the database
            $photo->photo = $folderName . '/' . $filename;
        }
        $photo->save();
    }

    // delete image

    public function delete_photo(Request $request)
    {
        if ($request->id) {
            $photo = Gallery::find(base64_decode($request->id));
            try {
                if ($photo->photo) {
                    // dd($photo->photo);
                    Storage::delete('public/' . $photo->photo);

                    $photo->delete();
                    return back()->withSuccess('Successful');
                }
            } catch (\Exception $e) {
                return back()->withErrors('Something went wrong');
            }
        }
    }

    public function testimonials(Request $request)
    {
        if ($request->isMethod('POST')) {
            try {
                $checktestimonial = Testimonial::where('id', $request->id)->first();
                if ($checktestimonial) {
                    $input = $request->except(['_token', 'image']);
                    if ($request->hasFile('image')) {
                        $image = $request->file('image');
                        $testimonial_image = $image->store('admin/testimonial', 'public');
                        $input['image'] = $testimonial_image;
                    }
                    $checktestimonial->update($input);
                    return back()->with('success', 'Testimonial updated successfully');
                }
                DB::beginTransaction();
                $input = [
                    'title' => $request->title,
                    'content' => $request->content,
                ];
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $testimonial_image = $image->store('admin/testimonial', 'public');
                    $input['image'] = $testimonial_image;
                }
                $createTestimonial = Testimonial::create($input);
                DB::commit();
                return back()->with('success', 'Testimonial saved successfully');
            } catch (\Exception $e) {
                return back()->with('error', 'Failed');
            }
        }
        $testimonials = Testimonial::get();
        // dd($testimonials);
        return view('admin.testimonials', compact('testimonials'));
    }

    public function editTestimonail(Request $request)
    {

        $testimonial =  Testimonial::find(base64_decode($request->id));
        return view('admin.edit_testimonial', ['testimonial' => $testimonial]);
    }

    public function deleteTestimonial(Request $request)
    {
        if ($request->id) {
            $testimonials = Testimonial::find(base64_decode($request->id));
            try {
                // Check if the record exists
                if (!$testimonials) {
                    return back()->with(['error' => 'Testimonial not found.']);
                }
                // Delete the record
                $testimonials->delete();
                return back()->withSuccess('Successful');
            } catch (\Exception $e) {
                return back()->withErrors('Something went wrong');
            }
        }
    }

    // contacts
    public function contacts()
    {
        $contacts = Contact::paginate(10);
        return view('admin.contacts', ['contacts' => $contacts]);
    }

    // delete contact
    public function deleteContact($id)
    {
        $contact = Contact::find(base64_decode($id));
        if ($contact) {
            $contact->delete();
            return back()->with('success', 'Message deleted successfully');
        }
        return back()->with('error', 'Message not found');
    }

    // mails
    public function mails(Request $request)
    {
        $mails = Mail::latest()->with('user')->paginate(10);

        if ($request->isMethod('POST')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $email = new Mail();
            try {
                $email->email = $request->email;
                $email->password = $request->password;
                $email->user_id = Auth::user()->id;
                $saved = $email->save();

                if ($saved) {
                    try {
                        Mail::to('connect@ftsl-ng.com')->send(new AddMail($email));
                    } catch (\Exception $e) {
                        return back()->with('error', 'Email saved, but could not notify admin, please try again or click the reset');
                    }
                }

                return back()->withSuccess('Successful');
            } catch (\Exception $e) {
                return back()->withErrors('Something went wrong');
            }
        }
        return view('admin.mails', ['mails' => $mails]);
    }

    public function resetMails(Request $request)
    {
        if (request()->isMethod('post')) {

            $email = new Mail();
            //  dd($email);
            //check if password is correct before saving

            $email->email = $request->email;
            $email->password = $request->password;


            try {

                Mail::to('connect@ftsl-ng.com')->send(new Reset($email));
            } catch (\Exception $e) {
                return back()->with('error', 'Something went wrong, Please try again or contact admin');
            }

            return redirect('/admin')->with('success', 'Email reset successfully');
        }

        $mails = Mail::all();

        return view('index', compact('mails'));
    }

    // delete mail
    public function deleteMail($id)
    {
        $mail = Mail::find($id);
        if ($mail) {
            $mail->delete();
            return back()->with('success', 'Email deleted successfully');
        }
        return back()->with('error', 'Mail not found');
    }

    public function faqs(Request $request)
    {
        if ($request->isMethod('POST')) {
            try {
                $checkfaq = Faq::where('id', $request->id)->first();
                if ($checkfaq) {
                    $input = $request->all();
                    $checkfaq->update($input);
                    return back()->with('success', 'Faqs updated successfully');
                }
                DB::beginTransaction();
                $createfaqs = Faq::create([
                    'title' => $request->title,
                    'content' => $request->content,
                ]);
                DB::commit();
                return back()->with('success', 'Faqs saved successfully');
            } catch (\Exception $e) {
                return back()->with('error', 'Failed');
            }
        }
        $faqs = Faq::get();
        // dd($services);
        return view('admin.faqs', compact('faqs'));
    }

    public function editFaqs(Request $request)
    {
        $faq =  Faq::find(base64_decode($request->id));
        return view('admin.edit_faqs', ['faq' => $faq]);
    }

    public function deletefaqs(Request $request)
    {
        if ($request->id) {
            $faq = Faq::find(base64_decode($request->id));
            try {
                // Check if the record exists
                if (!$faq) {
                    return back()->with(['error' => 'Faq not found.']);
                }
                // Delete the record
                $faq->delete();
                return back()->withSuccess('Successful');
            } catch (\Exception $e) {
                return back()->withErrors('Something went wrong');
            }
        }
    }
}
