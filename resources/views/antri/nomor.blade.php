@extends('layouts.appantrian')

@section('content')
<div class="container">



    <!-- topics -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="section-title">AMBIL NOMOR ANTRI</h2>
                </div>

                <div class="row ">
                    <!-- topic-item -->
                    <div class="col-lg-12 col-sm-12 ">
                        <div class="col-lg-4 col-sm-4 mb-4">
                            <button class="btn ukuransama px-4 py-5 bg-white shadow text-center d-block match-height">
                                <i class="fas fa-notes-medical icon text-primary d-block mb-4"></i>

                                <h3 class="mb-3 mt-0">Costumer Service</h3>
                                <p class="mb-0"></p>
                            </button>
                        </div>
                        <div class="col-lg-4 col-sm-4 mb-4">
                            <button class="btn ukuransama px-4 py-5 bg-white shadow text-center d-block match-height">
                                <i class="fas fa-hospital-user icon text-primary d-block mb-4"></i>
                                <h3 class="mb-3 mt-0">Surat Sehat Jiwa</h3>
                                <p class="mb-0"></p>
                            </button>
                        </div>
                        <div class="col-lg-4 col-sm-4 mb-4">
                            <form action="{{ route('index.amampoli') }}" method="POST" enctype="multipart/form-data" onsubmit="return onsubmitForm(this);">
                                @csrf
                                <input type="hidden" id="name" name="name" value="B">
                                <button class="btn ukuransama px-4 py-5 bg-white shadow text-center d-block match-height" id="save">
                                    <i class="fas fa-hospital-user icon text-primary d-block mb-4"></i>
                                    <h3 class="mb-3 mt-0">Anrian Berobat</h3>
                                    <p class="mb-0"></p>
                                </button>
                                <div class="container table-insert">

                                </div>
                            </form>

                            


                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">

                </div>
            </div>

        </div>
</div>
</section>
</div>



@endsection

@section('script')
<script src="{{ asset('js/ajax.js') }}"></script>
<script>
    // create function in Javascript
    function onsubmitForm(form) {

        // create AJAX instance
        var ajax = new XMLHttpRequest();

        // open the request
        ajax.open("POST", form.getAttribute("action"), true);

        // listen for response from server
        ajax.onreadystatechange = function() {
            // when the request is successfull
            if (this.readyState == 4 && this.status == 200) {
                // convert the JSON response into Javascript object
                var data = JSON.parse(this.responseText);

                // show the response
                // alert(data.status + " - " + data.message);
            }

            // if the request fails
            if (this.status == 500) {
                alert(this.responseText);
            }
        };

        // create form data object
        var formData = new FormData(form);

        // send the request
        ajax.send(formData);

        // prevent the form from submitting
        return false;
    }

</script>
@endsection
