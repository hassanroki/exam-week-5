@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-4">Contact Page</h1>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae eveniet aliquid tempora error laborum? A
            sequi asperiores totam consequuntur optio ipsam animi corrupti repudiandae repellat atque sed vitae ut modi
            quas, hic dolore assumenda libero enim iste sint molestias dolorem odit neque. Natus soluta, id itaque magni
            optio unde laboriosam!</p>

        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" id="name" name="name" type="text" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" id="email" name="email" type="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
    </div>
@endsection
