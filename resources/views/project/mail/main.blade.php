@include('project.layout.navbar')
<div class="maill-success">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="success-content">
            <i class="lni lni-envelope"></i>
            <h2>Your Mail Sent Successfully</h2>
            <p>
              Thanks for contacting with us, We will get back to you asap.
            </p>
            <div class="button">
              <a href="{{ route('home') }}" class="btn">Back to Home</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('project.layout.footer')
