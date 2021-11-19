@extends('layouts.front')

@section('content')

<header id="header">
    <div class="logo container">
        <div>
            <p>CONTATE-NOS</p>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">

                    <form>
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="field half">
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Message" rows="7"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="button primary"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
