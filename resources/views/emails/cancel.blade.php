@component('mail::message')
# I'm sorry your application is not successful. Please go to Office of Management of Security Office for any inquiries or you can email us your account number at osem@iium.edu.my for refund process.


@component('mail::button', ['url' => 'https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin'])
Email us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
