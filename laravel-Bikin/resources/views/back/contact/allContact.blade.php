@extends('back.template.main')




@section('backContent')
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container " data-aos="fade-up">

          <div class="section-title border my-2">
            <h2>{{$titreContact->titre}}</h2>
            <p>{{$titreContact->sousTitre}}</p>
            <div class="d-flex justify-content-center my-2">
            <a href="{{route('titres.show',$titreContact->id)}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
            </div>
          </div>

          <div class="row">

            <div class="col-lg-6 w-100">

              <div class="row border">
                @foreach ($contacts as $contact )
                  @if ($contact->id ===1)
                  <div class="col-md-12">
                    <div class="info-box">
                      <i class="bx {{$contact->icon->name}}"></i>
                      <h3>{{$contact->titre}}</h3>
                      <p>{{$contact->sousTitre}}</p>
                    </div>
                  </div>
                    
                @else

                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx {{$contact->icon->name}}"></i>
                    <h3>{{$contact->titre}}</h3>
                    <p>{{$contact->sousTitre}}<br>{{$contact->infos}}</p>
                  </div>
                </div>
                  @endif
                @endforeach
                <div class="d-flex justify-content-center mt-3">
                <a href="{{route('sectionsContact')}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
                </div>

            </div>

            </div>

            {{-- <div class="col-lg-6 mt-4 mt-md-0">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div> --}}

          </div>

        </div>
      </section><!-- End Contact Section -->
@endsection