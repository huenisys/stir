@component('mail::message')
# We have a new Contact Request!

@component('mail::table')
| Field | Answers |
|:- |:- |
| Name | {{$contactRequest['name']}} |
| Email | {{$contactRequest['email']}} |
| Question | {{$contactRequest['question']}} |

@endcomponent

@endcomponent
