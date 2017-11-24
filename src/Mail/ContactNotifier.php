<?php

namespace Stir\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactNotifier extends Mailable
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
		->replyTo($this->contactRequest['email'], $this->contactRequest['name'])
		->subject('New Contact Request from: ['.$this->contactRequest['email'].']')
		->markdown('stir::emails.ContactNotifier');
	}
}
