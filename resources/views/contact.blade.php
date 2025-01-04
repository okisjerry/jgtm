@extends('layouts.guest')
@section('content')


<!-- Form Section Starts -->
<div class="contact-form-container" style="margin-top: 50px; padding: 20px; margin-bottom: 20px;">
    <form action="https://formspree.io/f/mpwwwdjq" method="POST">
        <h2>Contact Us</h2>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
        </div>

        <button type="submit">Send Message</button>
    </form>

   
</div>



@endsection
