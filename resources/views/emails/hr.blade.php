@component('mail::message')
# Validation of user profile 

Gabriel Akinyosoye said he works for your company.
Kindly verify that.

@component('mail::button', ['url' => config('app.url') . ":8000" . "/jobs/verify"])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
