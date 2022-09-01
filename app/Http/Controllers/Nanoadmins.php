<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;
use App\crypto;
use App\Enquiries;
use App\gallerysprite;
use App\Paidcourses;
use App\Staff;
use App\Students;
use App\Mail\Sendnanomail;
use App\Courseoutline;
use App\Coursereview;
use App\Whatyouwilllearn;
use RealRashid\SweetAlert\Facades\Alert;
use App\Ourservice;

use function Ramsey\Uuid\v1;
use Illuminate\Support\Facades\Auth;
use Webkul\Product\Helpers\Review;

class Nanoadmins extends Controller
{
    //
    public function __construct()
    {
        // if (Auth::check()) {
        //     // The user is logged in...
        //     die('logged in');
        // }
        // else{
        //     die('not logged in');
        // }
    }





    public function index()
    {
        return view('admin.index');
    }
    public function cryptoall()
    {
        $allcrypto = crypto::all();
        $data = [];
        $data['cointransactions'] = $allcrypto;
        return view('admin.cryptoall', $data);
    }
    public function cryptopaid()
    {
        $paidcrypto = crypto::where('paid', '>', 0)->get();
        $data = [];
        $data['cointransactions'] = $paidcrypto;
        return view('admin.cryptopaid', $data);
    }
    public function cryptopending()
    {
        $pendingcrypto = crypto::where('paid', 0)->get();
        $data = [];
        $data['cointransactions'] = $pendingcrypto;
        return view('admin.cryptopending', $data);
    }

    public function staffcreate()
    {
        return  view('admin.staffcreate');
    }
    public function post_create_staff(Request $req)
    {
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $skill = $req->skill;
        $description = $req->description;
        $instagram = $req->instagram;
        $twitter = $req->twitter;
        $facebook = $req->facebook;
        $github = $req->github;
        $state = $req->state;
        $lga = $req->lga;

        $file_extension = $req->file('pic')->getClientOriginalExtension();
        if ($file_extension == "jpg") {
            # code...
            $save_file_extension = "jpg";
        } elseif ($file_extension == "jpeg") {
            # code...
            $save_file_extension = "jpeg";
        } else {
            $save_file_extension = "png";
        }
        $fileName = time() . $email . '.' . $save_file_extension;
        $path = $req->file('pic')->storeAS("profile", $fileName);
        /* Store $fileName name in DATABASE from HERE */

        $newstaff = new Staff();
        $newstaff->name = $name;
        $newstaff->email = $email;
        $newstaff->phone = $phone;
        $newstaff->skill = $skill;
        $newstaff->description = $description;
        $newstaff->instagram = $instagram;
        $newstaff->twitter = $twitter;
        $newstaff->facebook = $facebook;
        $newstaff->github = $github;
        $newstaff->state = $state;
        $newstaff->lga = $lga;
        $newstaff->pic = $fileName;
        $staffsave = $newstaff->save();

        if ($staffsave && $path) {
            # code...
            Alert::success('Staff Profile Created', 'The staff Profile was created successfully');
            return back();
        } elseif ($staffsave) {
            # code...
            Alert::warning('Error with profile creation', 'Staff profile was created but profile picture upload failed');
            return back();
        } elseif ($path) {
            # code...
            Alert::warning('Error with profile creation', 'Staff profile was not created but profile picture was uploaded to file storage please trey again');
            return back();
        } else {
            # code...
            Alert::error('Error with profile creation', 'Staff profile creation failed');
            return back();
        }
    }

    public function staffview()
    {
        $allstaff = Staff::all();
        $data = [];
        $data['allstaff'] = $allstaff;

        return view('admin.staffview', $data);
    }

    public function staffmemberupdate(Request $req)
    {
        $updatestaff = Staff::where('id', $req->id)->first();
        if ($updatestaff !== null) {
            # code...
            $name = $req->name;
            $email = $req->email;
            $phone = $req->phone;
            $skill = $req->skill;
            $description = $req->description;
            $instagram = $req->instagram;
            $twitter = $req->twitter;
            $facebook = $req->facebook;
            $github = $req->github;
            $state = $req->state;
            $lga = $req->lga;

            $file_extension = $req->file('pic')->getClientOriginalExtension();
            if ($file_extension == "jpg") {
                # code...
                $save_file_extension = "jpg";
            } elseif ($file_extension == "jpeg") {
                # code...
                $save_file_extension = "jpeg";
            } else {
                $save_file_extension = "png";
            }
            $fileName = time() . $email . '.' . $save_file_extension;
            $path = $req->file('pic')->storeAS("profile", $fileName);
            /* Store $fileName name in DATABASE from HERE */

            $updatestaff->name = $name;
            $updatestaff->email = $email;
            $updatestaff->phone = $phone;
            $updatestaff->skill = $skill;
            $updatestaff->description = $description;
            $updatestaff->instagram = $instagram;
            $updatestaff->twitter = $twitter;
            $updatestaff->facebook = $facebook;
            $updatestaff->github = $github;
            $updatestaff->state = $state;
            $updatestaff->lga = $lga;
            $updatestaff->pic = $fileName;
            $staffsave = $updatestaff->save();
            if ($staffsave && $path) {
                # code...
                Alert::success('Staff Profile updated', 'The staff Profile was updated successfully');
                return back();
            } else {
                # code...
                Alert::error('Staff Profile failed to update', 'The staff Profile was not updated please try again!');
                return back();
            }
        } else {
            # code...
            Alert::error('Staff Profile not found', 'The staff Profile was not found please make sure you followed the due process');
            return back();
        }
    }

    public function deletestaffmember(Request $req)
    {
        if ($req->id !== null) {
            # code...
            $delstaff = Staff::where('id', $req->id)->first();
            if ($delstaff !== null) {
                # code...
                $delstatus = $delstaff->delete();
                if ($delstatus) {
                    # code...
                    Alert::success('Staff Profile deleted', 'The staff Profile was deleted successfully');
                    return back();
                } else {
                    # code...
                    Alert::warning('Failed to delete', 'The staff failed to delete');
                    return back();
                }
            } else {
                # code...
                Alert::error('Staff Profile not found', 'The staff Profile was not found or does not exist');
                return back();
            }
        } else {
            # code...
            Alert::warning('Staff Profile ID not passed', 'The staff Profile id was empty please follow the correct link and try again!');
            return back();
        }
    }

    public function coursecreate()
    {
        $staff = Staff::all();
        $data = [];
        $data['staff'] = $staff;
        return view('admin.coursecreate', $data);
    }

    public function post_create_course(Request $req)
    {
        $course = $req->course;
        $price = $req->price;
        $prerequisite = $req->prerequisite;
        $tutor = $req->tutor;
        $maxduation = $req->maxduation;
        $courseouline = $req->courseouline;
        $timetable = $req->timetable;

        $addcourse = new Courses();

        $file_extension = $req->file('courseouline')->getClientOriginalExtension();
        if ($file_extension == "jpg") {
            # code...
            $save_file_extension = "jpg";
        } elseif ($file_extension == "jpeg") {
            # code...
            $save_file_extension = "jpeg";
        } elseif ($file_extension == "pdf") {
            # code...
            $save_file_extension = "pdf";
        } elseif ($file_extension == "doc") {
            # code...
            $save_file_extension = "doc";
        } else {
            $save_file_extension = "png";
        }
        $fileName = time() . $course . '.' . $save_file_extension;
        $path = $req->file('courseouline')->storeAS("course", $fileName);








        $file_extension = $req->file('courseimage')->getClientOriginalExtension();
        if ($file_extension == "jpg") {
            # code...
            $save_file_extension = "jpg";
        } elseif ($file_extension == "jpeg") {
            # code...
            $save_file_extension = "jpeg";
        } elseif ($file_extension == "pdf") {
            # code...
            $save_file_extension = "pdf";
        } elseif ($file_extension == "doc") {
            # code...
            $save_file_extension = "doc";
        } else {
            $save_file_extension = "png";
        }
        $coursefileName = time() . $course . '.' . $save_file_extension;
        $path = $req->file('courseimage')->storeAS("courseimage", $coursefileName);
        /* Store $fileName name in DATABASE from HERE */
        $addcourse->course = $course;
        $addcourse->price = $price;
        $addcourse->prerequisite = $prerequisite;
        $addcourse->tutor = $tutor;
        $addcourse->maxduation = $maxduation;
        $addcourse->timetable = $timetable;
        $addcourse->courseouline = $fileName;
        $addcourse->courseimage = $coursefileName;

        $createcourse = $addcourse->save();

        if ($createcourse && $path) {
            # code...
            Alert::success('Course Created', "The Course $course was created successfully");
            return back();
        } elseif ($createcourse) {
            # code...
            Alert::warning('Error with course creation', "Staff $course was created but Courseoultine  upload failed");
            return back();
        } elseif ($path) {
            # code...
            Alert::warning('Error with course creation', 'Staff course was not created but Courseoutline was uploaded to file storage please trey again');
            return back();
        } else {
            # code...
            Alert::error('Error with profile creation', 'The course creation failed entirely');
            return back();
        }
    }



    public function coursesall()
    {
        $allcourses = Courses::all();
        $data = [];
        $staff = Staff::all();
        $data['staff'] = $staff;
        $data['allcourses'] = $allcourses;
        return view('admin.coursesall', $data);
    }


    public function courseupdate(Request $req)
    {

        $courseupdate = Courses::where('id', $req->id)->first();
        if ($courseupdate !== null) {
            # code...
            $course = $req->course;
            $price = $req->price;
            $prerequisite = $req->prerequisite;
            $tutor = $req->tutor;
            $maxduation = $req->maxduation;
            $courseouline = $req->courseouline;
            $timetable = $req->timetable;


            $file_extension = $req->file('courseouline')->getClientOriginalExtension();
            if ($file_extension == "jpg") {
                # code...
                $save_file_extension = "jpg";
            } elseif ($file_extension == "jpeg") {
                # code...
                $save_file_extension = "jpeg";
            } else {
                $save_file_extension = "png";
            }
            $fileName = time() . $course . '.' . $save_file_extension;
            $path = $req->file('courseouline')->storeAS("course", $fileName);
            /* Store $fileName name in DATABASE from HERE */

            $courseupdate->course = $course;
            $courseupdate->price = $price;
            $courseupdate->prerequisite = $prerequisite;
            $courseupdate->tutor = $tutor;
            $courseupdate->maxduation = $maxduation;
            $courseupdate->timetable = $timetable;
            $courseupdate->courseouline = $fileName;

            $coursesave = $courseupdate->save();
            if ($coursesave && $path) {
                # code...
                Alert::success('Course updated', 'The Coursewas updated successfully');
                return back();
            } else {
                # code...
                Alert::error('Course Course failed to update', 'The Course was not updated please try again!');
                return back();
            }
        } else {
            # code...
            Alert::error('Course not found', 'The Course was not found please make sure you followed the due process');
            return back();
        }
    }
    public function deletecourse(Request $req)
    {

        if ($req->id !== null) {
            # code...
            $delcourse = Courses::where('id', $req->id)->first();
            if ($delcourse !== null) {
                # code...
                $delstatus = $delcourse->delete();
                if ($delstatus) {
                    # code...
                    Alert::success('Course deleted', 'The Course was deleted successfully');
                    return back();
                } else {
                    # code...
                    Alert::warning('Failed to delete', 'The Course failed to delete');
                    return back();
                }
            } else {
                # code...
                Alert::error(' Course not found', 'The Course was not found or does not exist');
                return back();
            }
        } else {
            # code...
            Alert::warning('Course ID not passed', 'The Course id was empty please follow the correct link and try again!');
            return back();
        }
    }

    public function coursesandstudents()
    {
        $courses = Courses::all();
        $allpayment = Paidcourses::all();
        $data = [];
        $data['courses'] = $courses;
        $data['allpayment'] = $allpayment;

        return view('admin.coursesandstudents', $data);
    }

    public function coursespayments()
    {
        $courses = Courses::all();
        $allpayment = Paidcourses::all();
        $data = [];
        $data['courses'] = $courses;
        $data['allpayment'] = $allpayment;
        return view('admin.coursespayments', $data);
    }

    public function coursetimetable()
    {
        return view('admin.coursetimetable');
    }

    public function studentall()
    {
        # code...
        $allstudent = Students::all();
        $data = [];
        $data['allstudents'] = $allstudent;
        return view('admin.studentall', $data);
    }


    public function studentupdate(Request $req)
    {
        # code...

        $studentupdate = Students::where('id', $req->id)->first();
        if ($studentupdate !== null) {
            # code...
            $name = $req->name;
            $sex = $req->sex;
            $state = $req->state;
            $lga = $req->lga;
            $address = $req->address;
            $email = $req->email;
            $phone = $req->phone;

            $file_extension = $req->file('studentpassport')->getClientOriginalExtension();
            if ($file_extension == "jpg") {
                # code...
                $save_file_extension = "jpg";
            } elseif ($file_extension == "jpeg") {
                # code...
                $save_file_extension = "jpeg";
            } else {
                $save_file_extension = "png";
            }
            $fileName = time() . $name . '.' . $save_file_extension;
            $path = $req->file('studentpassport')->storeAS("studentspic", $fileName);
            /* Store $fileName name in DATABASE from HERE */

            $studentupdate->name = $name;
            $studentupdate->sex = $sex;
            $studentupdate->state = $state;
            $studentupdate->lga = $lga;
            $studentupdate->address = $address;
            $studentupdate->email = $email;
            $studentupdate->phone = $phone;
            $studentupdate->studentpassport = $fileName;

            $coursesave = $studentupdate->save();
            if ($coursesave && $path) {
                # code...
                Alert::success('student updated', 'The student was updated successfully');
                return back();
            } else {
                # code...
                Alert::error('student failed to update', 'The student profile was not updated please try again!');
                return back();
            }
        } else {
            # code...
            Alert::error('student profile not found', 'The student profile not found please make sure you followed the due process');
            return back();
        }
    }

    public function studentregister()
    {
        # code...
        $allcourses = Courses::all();
        $data = [];
        $data['courses'] = $allcourses;
        return view('admin.studentregister', $data);
    }
    public function post_create_student(Request $req)
    {
        # code...
        $name = $req->name;
        $sex = $req->sex;
        $course = $req->course;
        $state = $req->state;
        $lga = $req->lga;
        $address = $req->address;
        $email = $req->email;
        $phone = $req->phone;
        $name = $req->name;

        $file_extension = $req->file('studentpassport')->getClientOriginalExtension();
        if ($file_extension == "jpg") {
            # code...
            $save_file_extension = "jpg";
        } elseif ($file_extension == "jpeg") {
            # code...
            $save_file_extension = "jpeg";
        } elseif ($file_extension == "pdf") {
            # code...
            $save_file_extension = "pdf";
        } elseif ($file_extension == "doc") {
            # code...
            $save_file_extension = "doc";
        } else {
            $save_file_extension = "png";
        }
        $fileName = time() . $name . '.' . $save_file_extension;
        $path = $req->file('studentpassport')->storeAS("studentspic", $fileName);
        /* Store $fileName name in DATABASE from HERE */


        $newstudent = new Students();
        $newstudent->name = $name;
        $newstudent->sex = $sex;
        $newstudent->state = $state;
        $newstudent->lga = $lga;
        $newstudent->address = $address;
        $newstudent->email = $email;
        $newstudent->phone = $phone;
        $newstudent->studentpassport = $fileName;
        $savenewstudent = $newstudent->save();

        if ($savenewstudent && $path) {
            # code...
            $newcoursestudent = new Paidcourses();
            $studentid = Students::where('email', $email)->first();
            $studentcourse = Courses::where('id', $course)->first();
            $newcoursestudent->studentname = $name;
            $newcoursestudent->studentid = $studentid->id;
            $newcoursestudent->courseid = $studentcourse->id;
            $newcoursestudent->amountpaid = $studentcourse->price;
            $newcoursestudent->balanceremaining = 0;
            $finishup = $newcoursestudent->save();
            if ($finishup) {
                # code...
                Alert::success('student profile Created', "The student profile and Course $studentcourse->course have been added successfully");
                return back();
            } else {
                # code...
                Alert::error('student Course not added', "the student profile was created  but course failed to add, please report to manager immediately");
                return back();
            }
            Alert::success('student profile Created', "The Course $$studentcourse->course is been added");
            return back();
        } elseif ($createcourse) {
            # code...
            Alert::warning('Error with Profile creation', "The student $name prfile was created but picture upload failed");
            return back();
        } elseif ($path) {
            # code...
            Alert::warning('Error with profile creation', 'Student profile was not created but profile picture was uploaded to file storage please trey again');
            return back();
        } else {
            # code...
            Alert::error('Error with student creation', 'The student creation failed entirely');
            return back();
        }
    }



    public function emailstudents(request $req)
    {
        if ($req->id > 0) {
            # code...
            $deuser = Students::where("id", $req->id)->first();
            if ($deuser !== null) {
                # code...
                $data = [];
                $data['id'] = $req->id;
                $data['useremail'] = $deuser->email;
                return view("admin.emailstudents", $data);
            } else {
                # code...
                Alert::error('Error fingding student record', 'The student record was not found in the database');
                return back();
            }
        }
        return view('admin.emailstudents');
    }

    public function postemailstudents(Request $req)
    {
        $mailtitle = $req->mailtitle;
        $mail = $req->mail;
        $userid =  $req->userid;
        if (isset($userid)) {
            # code...
            $user = Students::where("id", $userid)->first();
            $email = $user->email;
            $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];

            $wasmailsent =  Mail::to($email)->send(new Sendnanomail($emaildata));
            if ($wasmailsent) {
                # code...
                Alert::success("Mail sent", "Email sent to $email succesfuly");
            } else {
                # code...
                Alert::error("Mail not sent sent", "Email was not sent to $email ");
                return back();
            }
        } else {
            # code...
            $users = Students::all();
            $sentcount = 0;
            $failedcount = 0;
            if ($users !== null) {
                # code...
                foreach ($users as $user) {
                    # code...
                    $email = $user->email;
                    $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];
                    $mailsent = Mail::to($email)->send(new Sendnanomail($emaildata));
                    if ($mailsent) {
                        # code...
                        $sentcount += 1;
                    } else {
                        # code...
                        $failedcount += 1;
                    }
                }
                Alert::success("Mail sent", " total of $sentcount Email were sent succesfully $failedcount emails failed to send");
                return back();
            }
            Alert::error("Mail not sent to anyone", "No records was found in the database to send mail");
            return back();
        }
        return view("admin.emailstudents");
    }


    public function emailstaff(request $req)
    {
        if ($req->id > 0) {
            # code...
            $deuser = Staff::where("id", $req->id)->first();
            if ($deuser !== null) {
                # code...
                $data = [];
                $data['id'] = $req->id;
                $data['useremail'] = $deuser->email;
                return view("admin.emailstaff", $data);
            } else {
                # code...
                Alert::error('Error finding staff record', 'The staff record was not found in the database');
                return back();
            }
        }
        return view('admin.emailstaff');
    }

    public function postemailstaff(Request $req)
    {
        $mailtitle = $req->mailtitle;
        $mail = $req->mail;
        $userid =  $req->userid;
        if (isset($userid)) {
            # code...
            $user = Staff::where("id", $userid)->first();
            $email = $user->email;
            $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];

            $wasmailsent =  Mail::to($email)->send(new Sendnanomail($emaildata));
            if ($wasmailsent) {
                # code...
                Alert::success("Mail sent", "Email sent to $email succesfuly");
            } else {
                # code...
                Alert::error("Mail not sent sent", "Email was not sent to $email ");
                return back();
            }
        } else {
            # code...
            $users = Staff::all();
            $sentcount = 0;
            $failedcount = 0;
            if ($users !== null) {
                # code...
                foreach ($users as $user) {
                    # code...
                    $email = $user->email;
                    $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];
                    $mailsent = Mail::to($email)->send(new Sendnanomail($emaildata));
                    if ($mailsent) {
                        # code...
                        $sentcount += 1;
                    } else {
                        # code...
                        $failedcount += 1;
                    }
                }
                Alert::success("Mail sent to staff", " total of $sentcount Email were sent succesfully $failedcount emails failed to send");
                return back();
            }
            Alert::error("Mail not sent to any Staff", "No records was found in the staff database to send mail");
            return back();
        }
        return view("admin.emailstaff");
    }




    public function emailsubscriberss(request $req)
    {
        if ($req->id > 0) {
            # code...
            $deuser = Newsletter::where("id", $req->id)->first();
            if ($deuser !== null) {
                # code...
                $data = [];
                $data['id'] = $req->id;
                $data['useremail'] = $deuser->email;
                return view("admin.emailsubscriberss", $data);
            } else {
                # code...
                Alert::error('Error finding subscribers record', 'The subscribers record was not found in the database');
                return back();
            }
        }
        return view('admin.emailsubscriberss');
    }


    public function postemailsubscriberss(Request $req)
    {
        $mailtitle = $req->mailtitle;
        $mail = $req->mail;
        $users = Newsletter::all();
        $sentcount = 0;
        $failedcount = 0;
        if ($users !== null) {
            # code...
            foreach ($users as $user) {
                # code...
                $email = $user->email;
                $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];
                $mailsent = Mail::to($email)->send(new Sendnanomail($emaildata));
                if ($mailsent) {
                    # code...
                    $sentcount += 1;
                } else {
                    # code...
                    $failedcount += 1;
                }
            }
            Alert::success("Mail sent to subscribers", " total of $sentcount Email were sent succesfully $failedcount emails failed to send");
            return back();
        }
        Alert::error("Mail not sent to any subscribers", "No records was found in the subscribers database to send mail");
        return back();
    }




    public function emailall(request $req)
    {

        return view('admin.emailall');
    }


    public function postemailall(Request $req)
    {
        $mailtitle = $req->mailtitle;
        $mail = $req->mail;
        $users = Staff::all();
        $newsletter = Newsletter::all();
        $students = Students::all();
        $sentcount = 0;
        $failedcount = 0;
        if ($users !== null) {
            # code...
            foreach ($users as $user) {
                # code...
                $email = $user->email;
                $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];
                $mailsent = Mail::to($email)->send(new Sendnanomail($emaildata));
                if ($mailsent) {
                    # code...
                    $sentcount += 1;
                } else {
                    # code...
                    $failedcount += 1;
                }
            }
        }
        if ($newsletter !== null) {
            # code...
            foreach ($newsletter as $user) {
                # code...
                $email = $user->email;
                $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];
                $mailsent = Mail::to($email)->send(new Sendnanomail($emaildata));
                if ($mailsent) {
                    # code...
                    $sentcount += 1;
                } else {
                    # code...
                    $failedcount += 1;
                }
            }
        }
        if ($students !== null) {
            # code...
            foreach ($students as $user) {
                # code...
                $email = $user->email;
                $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];
                $mailsent = Mail::to($email)->send(new Sendnanomail($emaildata));
                if ($mailsent) {
                    # code...
                    $sentcount += 1;
                } else {
                    # code...
                    $failedcount += 1;
                }
            }
        }
        Alert::success("Mail sent to subscribers", " total of $sentcount Email were sent succesfully $failedcount emails failed to send");
        return back();
    }

    //enquiry
    public function enquiry()
    {
        # code...
        $allenquiry = Enquiries::all();
        $data = [];
        $data['$allenquiry'] = $allenquiry;
        return view('admin.enquiry', $data);
    }

    public function enquirynew()
    {
        # code...
        $enquirynew = Enquiries::where('responded', 0)->get();
        $data = [];
        $data['$enquirynew'] = $enquirynew;
        return view('admin.enquirynew', $data);
    }
    public function enquiryresponse(Request $req)
    {
        # code...
        $id = $req->id;
        $mail = $req->mail;
        $enquirynew = Enquiries::where('id', $id)->first();
        if ($enquirynew !== null) {
            # code...
            $enquirynew->responsemessage = $mail;
            $enquirynew->responded = 1;
            $saveresponse = $enquirynew->save();

            $email = $enquirynew->email;
            $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => "Response to: $enquirynew->title "];
            $mailsent = Mail::to($email)->send(new Sendnanomail($emaildata));
            if ($mailsent && $saveresponse) {
                # code...
                Alert::success("Response sent succesfully", " Response sent to subscriber email and stored succesfully");
                return back();
            } elseif ($mailsent) {
                # code...
                Alert::error("Response sent succesfully", " Response sent to subscriber email but not stored");
                return back();
            } else {
                Alert::error("Response not sent ", " Response was not sent to the visitor please conatct manually");
                return back();
            }
        } else {
            # code...
            Alert::error("NO user found", " Please the records no user was found");
            return back();
        }
    }


    public function gallerysprites()
    {
        # code...
        $gsp = gallerysprite::all();
        $data = [];
        $data['gsps'] = $gsp;
        return view('admin.gallerysprites', $data);
    }


    public function galleryspritesapprove(Request $req)
    {
        # code...
        $id = $req->id;
        $gal = gallerysprite::where('id', $id)->first();
        if ($gal !== null) {
            # code...
            $gal->approved = 1;
        $saveit = $gal->save();
        if ($saveit) {
            # code...
            Alert::success("Post Request Approved", " The post was approved succesfully and should be showing itn the page");
            return back();
        } else {
            # code...
            Alert::error("Post Request approval failed", " The post was not approved succesfully !!!");
            return back();
        }
        } else {
            # code...
            Alert::error("Post Request approval failed", " The post was not found in the record!!");
            return back();
        }


    }
    public function galleryspritesdelete(Request $req)
    {
        # code...
        $id = $req->id;
        $gal = gallerysprite::where('id', $id)->first();
        if ($gal !== null) {
            # code...
            $delit = $gal->delete();

            if ($delit) {
                # code...
                Alert::success("Post Deleted", " The post was deleted succesfully ");
                return back();
            } else {
                # code...
                Alert::error("Post Request deletion failed", " The post was not deleted succesfully !!!");
                return back();
            }
        } else {
            # code...
            Alert::error("Post Request deletion failed", " The post was not found in the record!!");
            return back();
        }
    }

    public function courseoutlinecreate(Request $req)
    {
        # code...
        $courseid = $req->id;
        $courseoutline = $req->courseoutline;
        $description = $req->description;


        $newcourseoutline= new Courseoutline();
        $newcourseoutline->outline = $courseoutline;
        $newcourseoutline->description = $description;
        $newcourseoutline->courseid = $courseid;

        $newcourseoutline->courseid = $courseid;
        if ($newcourseoutline->save()) {
            # code...
            Alert::success("Success", " the course outline was added");
            return back();
        } else {
            # code...
            Alert::error("Error adding the course outline", " the course outline was not added");
            return back();
        }
    }


    public function courseoutlineview(Request $req)
    {
        # code...
        $allcourseoutline = Courseoutline::where('courseid', $req->id)->get();
        $data = [];
        $data['courseoutline']=$allcourseoutline;
        $data['cid']=$req->id;
        return view('admin.courseoutlineview', $data);


    }

    public function courseoutlineupdate(Request $req)
    {
        # code...
        $id = $req->id;
        $courseoutline = $req->courseoutline;
        $description = $req->description;


        $co = Courseoutline::where('id', $id)->first();
        if ($co !== null) {
            # code...
            $co->outline = $courseoutline;
            $co->description = $description;

            $saveit = $co->save();
            if ($saveit) {
                # code...
                Alert::success("course outline updated", " The course outline was updated succesfully ");
                return back();
            } else {
                # code...
                Alert::error("course outline update request failed", " The course outline was not deleted succesfully !!!");
                return back();
            }
        } else {
            # code...
            Alert::error("course outline update request failed", " The course outline was not found in the record!!");
            return back();
        }
    }

    public function courseoutlinedelete(Request $req)
    {
        # code...
        $id = $req->id;
        $co = Courseoutline::where('id', $id)->first();
        if ($co !== null) {
            # code...
            $delit = $co->delete();

            if ($delit) {
                # code...
                Alert::success("course outline Deleted", " The course outline was deleted succesfully ");
                return back();
            } else {
                # code...
                Alert::error("course outline Request deletion failed", " The course outline was not deleted succesfully !!!");
                return back();
            }
        } else {
            # code...
            Alert::error("course outline Request deletion failed", " The course outline was not found in the record!!");
            return back();
        }
    }



    public function reviewadd(Request $req)
    {
        # code...
        $courseid = $req->id;
        $review = $req->review;
        $name = $req->name;
        $star = $req->star;
        $pic = $req->pic;

        $file_extension = $req->file('pic')->getClientOriginalExtension();
        if ($file_extension == "jpg") {
            # code...
            $save_file_extension = "jpg";
        } elseif ($file_extension == "jpeg") {
            # code...
            $save_file_extension = "jpeg";
        } elseif ($file_extension == "pdf") {
            # code...
            $save_file_extension = "pdf";
        } elseif ($file_extension == "doc") {
            # code...
            $save_file_extension = "doc";
        } else {
            $save_file_extension = "png";
        }
        $fileName = time() . $name . '.' . $save_file_extension;
        $path = $req->file('pic')->storeAS("reviewpic", $fileName);
        /* Store $fileName name in DATABASE from HERE */

        $newreview= new Coursereview();
        $newreview->review = $review;
        $newreview->courseid = $courseid;
        $newreview->name = $name;
        $newreview->star = $star;
        $newreview->pic = 'admin';
        if ($newreview->save()) {
            # code...
            Alert::success("Success", " the course review was added");
            return back();
        } else {
            # code...
            Alert::error("Error adding the course review", " the course review was not added");
            return back();
        }
    }


    public function coursereviewview(Request $req)
    {
        # code...
        $allcoursereview = Coursereview::where('courseid', $req->courseid)->get();
        $data = [];
        $data['coursereview']= $allcoursereview;
        $data['courseid']= $req->courseid;

        return view('admin.coursereviewview', $data);

    }

    public function coursereviewdelete(Request $req)
    {
        # code...
        $id = $req->id;
        $cr = Coursereview::where('id', $id)->first();
        if ($cr !== null) {
            # code...
            $delit = $cr->delete();

            if ($delit) {
                # code...
                Alert::success("course review Deleted", " The course review was deleted succesfully ");
                return back();
            } else {
                # code...
                Alert::error("course review Request deletion failed", " The course review was not deleted succesfully !!!");
                return back();
            }
        } else {
            # code...
            Alert::error("course review Request deletion failed", " The course review was not found in the record!!");
            return back();
        }
    }

    public function coursereviewapprove(Request $req)
    {
        # code...
        $id = $req->id;
        $ca = Coursereview::where('id', $id)->first();
        if ($ca !== null) {
            # code...
            $ca->approved = 1;
            $saveit = $ca->save();

            if ($saveit) {
                # code...
                Alert::success("course review Approved", " The course review was approved succesfully ");
                return back();
            } else {
                # code...
                Alert::error("course review failed to approve", " The course review was not approved succesfully !!!");
                return back();
            }
        } else {
            # code...
            Alert::error("course review Request deletion failed", " The course review was not found in the record!!");
            return back();
        }
    }






    public function whatyouwilllearncreate(Request $req)
    {
        # code...
        $courseid = $req->id;
        $youwilllearn = $req->youwilllearn;
        $newyouwilllearn= new Whatyouwilllearn();
        $newyouwilllearn->youwilllearn = $youwilllearn;
        $newyouwilllearn->courseid = $courseid;
        if ($newyouwilllearn->save()) {
            # code...
            Alert::success("Success", " the course What to learn iten was added");
            return back();
        } else {
            # code...
            Alert::error("Error adding the course learning item", " the course learn item was not added");
            return back();
        }
    }


    public function whatyouwilllearnview(Request $req)
    {
        # code...
        $whatyouwilllearnview = Whatyouwilllearn::where('courseid', $req->id)->get();
        $data['courselearn']= $whatyouwilllearnview;
        $data['courseid']= $req->id;

        return view('admin.coursewhatyouwilllearn',$data);

    }

    public function whatyouwilllearnupdate(Request $req)
    {
        # code...
        $id = $req->id;
        $youwilllearn = $req->youwilllearn;

        $co = Whatyouwilllearn::where('id', $id)->first();
        if ($co !== null) {
            # code...
            $co->youwilllearn = $youwilllearn;
            $saveit = $co->save();
            if ($saveit) {
                # code...
                Alert::success("course you willl learn updated", " The course youwilllearn was updated succesfully ");
                return back();
            } else {
                # code...
                Alert::error("course learn update request failed", " The course learn was not deleted succesfully !!!");
                return back();
            }
        } else {
            # code...
            Alert::error("course learn update request failed", " The course learn was not found in the record!!");
            return back();
        }
    }

    public function youwilllearndelete(Request $req)
    {
        # code...
        $id = $req->id;
        $co = Whatyouwilllearn::where('id', $id)->first();
        if ($co !== null) {
            # code...
            $delit = $co->delete();

            if ($delit) {
                # code...
                Alert::success("course Whatyouwilllearn Deleted", " The course Whatyouwilllearn was deleted succesfully ");
                return back();
            } else {
                # code...
                Alert::error("course Whatyouwilllearn Request deletion failed", " The course Whatyouwilllearn was not deleted succesfully !!!");
                return back();
            }
        } else {
            # code...
            Alert::error("course Whatyouwilllearn Request deletion failed", " The course Whatyouwilllearn was not found in the record!!");
            return back();
        }
    }


    public function ourservices (){

        $allservices =  Ourservice::all();
        $data = [];

        $data['ourservices']= $allservices;

        return view('admin.services', $data);

}




public function serviceadd (Request $req){
# code...
$service = $req->service;
$servicedescription = $req->servicedescription;

$file_extension = $req->file('serviceimage')->getClientOriginalExtension();
if ($file_extension == "jpg") {
    # code...
    $save_file_extension = "jpg";
} elseif ($file_extension == "jpeg") {
    # code...
    $save_file_extension = "jpeg";
}  else {
    $save_file_extension = "png";
}
$fileName = time() . $service . '.' . $save_file_extension;
$path = $req->file('serviceimage')->storeAS("serviceimages", $fileName);
/* Store $fileName name in DATABASE from HERE */

$allservices = new  Ourservice();
$allservices->service = $service;
$allservices->servicedescription = $servicedescription;
$allservices->serviceimage = $fileName;

if ($allservices->save()) {
    # code...
    Alert::success("Success", " the service item was added");
    return back();
} else {
    # code...
    Alert::error("Error adding the service item", " the service item was not added");
    return back();
}

}

public function serviceupdate (Request $req){
$id = $req->id;
$service = $req->service;
$servicedescription = $req->servicedescription;

$aservices = Ourservice::where('id', $id)->first();
if ($aservices != null) {
    # code...

    $file_extension = $req->file('serviceimage')->getClientOriginalExtension();
    if ($file_extension == "jpg") {
        # code...
        $save_file_extension = "jpg";
    } elseif ($file_extension == "jpeg") {
        # code...
        $save_file_extension = "jpeg";
    }  else {
        $save_file_extension = "png";
    }
    $fileName = time() . $service . '.' . $save_file_extension;
    $path = $req->file('serviceimage')->storeAS("serviceimages", $fileName);
    /* Store $fileName name in DATABASE from HERE */

    $aservices->service = $service;
     $aservices->servicedescription = $servicedescription;
    $aservices->serviceimage = $fileName;

if ($aservices->save()) {
    # code...
    Alert::success("Success", " the service item was updated");
    return back();
} else {
    # code...
    Alert::error("Error adding the service item", " the service item was not updated");
    return back();
}
}
else {
    # code...
    Alert::error("Error adding the service item", " the service item was not found");
    return back();
}



}
public function ourservicesdelete (Request $req){

    $id = $req->id;
        $co = Ourservice::where('id', $id)->first();
        if ($co !== null) {
            # code...
            $delit = $co->delete();

            if ($delit) {
                # code...
                Alert::success("service Deleted", " The service was deleted succesfully ");
                return back();
            } else {
                # code...
                Alert::error("course service Request deletion failed", " The course service was not deleted succesfully !!!");
                return back();
            }
        } else {
            # code...
            Alert::error("course service Request deletion failed", " The course service was not found in the record!!");
            return back();
        }
}
}
