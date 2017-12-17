<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\View\Factory;

class ContactController extends Controller
{

	public function index() {
		return view('contact');
    }

	public function store(Request $request) {
		$mailable = $this->fakeOrValidate( $request );

		$from      = setting('contact_email', config( 'mail.from.address' ));
		$from_name = config( 'mail.from.name' );
		$user      = new User( [ 'email' => $from, 'name' => $from_name ] );

		\Mail::to( $user )->send( $mailable );
	/*	$alert        = \Alert::success( __( 'We will contact you back in the shortest time.' ) );
		$alert->title = __( 'Email was sent!' );
		$alert->icon  = 'fa fa-envelope';
		alert( $alert );*/

		return back();
    }

	protected function fakeOrValidate( Request $request ) {
		if ( $request->get( 'test_mail' ) ) {
			$contact          = new Contact();
			$factory          = Factory::create();
			$contact->email   = $factory->email;
			$contact->name    = $factory->name;
			$contact->subject = $factory->realText( 50 );
			$contact->message = $factory->paragraphs( $factory->randomDigitNotNull, true );

			return $contact;
		}

		$rules = [
			'email'   => 'required|email',
			'message' => 'required',
		];

		if ( config( 'contact::use-captcha' ) ) {
			$rules['g-recaptcha-response'] = 'required|captcha';
		}
		$this->validate( $request, $rules );

		return new Contact( $request );
	}
}
