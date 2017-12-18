<?php

namespace Stir\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactResponder extends Mailable
{
	use Queueable, SerializesModels;

	public $contactRequest;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($contactRequest = null)
	{
		//
		if ($contactRequest == null) {
			$contactRequest = [
				"question" => "Question",
				"name" => "Some Agency",
				"email" => "email@example.com",
			];
		}
		$this->contactRequest = $contactRequest;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
		return $this
		->replyTo(config('stir.notifier_to'))
		->subject(config('app.name').' Contact Request')
		->markdown('stir::emails.ContactResponder');
	}
}
