<?php

namespace Stir\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Stir\Mail\ContactNotifier;
use Stir\Mail\ContactResponder;

class FormSubmissionsController extends Controller
{

		public function contact(Request $request) {
			$contactRequest = $request->all();

			$request->session()->flash('newContactAlertMessage', 'Your Contact Request was received. One of our representatives will contact you soon. For reference, copy was sent to your mail.');

			// notifier, goes to admin
			$mail = \Mail::to(config('stir.notifier_to'));
			if (config('stir.notifier_cc')) {
				$mail->cc(config('stir.notifier_cc'));
			}
			$mail->send(new ContactNotifier($contactRequest));

			// responder, goes to customer
			\Mail::to($contactRequest['email'])->send(new ContactResponder($contactRequest));

			return redirect('/')->withInput();
		}


}
