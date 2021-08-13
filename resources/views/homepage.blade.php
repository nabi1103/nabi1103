<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Customer Service</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

</head>

<body class="antialiased">
<div class='container'>
    <form id='main-form' autocomplete="off" method="POST" action="/">
        {{csrf_field()}}
        <div class="form-group">
            <label><h3>Name</h3></label>
            <input type="text" class="form-control" name="name" id="name" onfocus="this.value=''">
        </div>

        <div class="form-group">
            <label><h3>Phone</h3></label>
            <input type="text" class="form-control" name="phone" id="phone" required
                   pattern="^[0-9]*$" minlength="10" onfocus="this.value=''">
        </div>

        <div class="form-group">
            <label><h3>Email</h3></label>
            <input type="email" class="form-control" name="email" id="email" required
                   pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" onfocus="this.value=''">
        </div>

        <div class="form-group">
            <label><h3>Urgency</h3></label>
            <select id="urgency-level" name="urgency" form="main-form" onfocus="this.value=1">
                <option value="1">1 (Not very important)</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5 (Of utmost importance)</option>
            </select>
        </div>

        <div class="form-group">
            <label><h3>Description</h3></label>

            <div class="form-group">
                <label>What happened?</label>
                <textarea class="form-control" name="problem-description" id="message0" rows="4"
                          onfocus="this.value=''"></textarea>
            </div>

            <div class="form-group">
                <label>How did you try to fix the problem?</label>
                <textarea class="form-control" name="steps-taken" id="message1" rows="4"
                          onfocus="this.value=''"></textarea>
            </div>

            <div class="form-group">
                <label>How'd you like your problem solved?</label>
                <textarea class="form-control" name="expectation" id="message2" rows="4"
                          onfocus="this.value=''"></textarea>
            </div>
        </div>

        <div class="submit-button-div">
            <button class="submit-button">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
