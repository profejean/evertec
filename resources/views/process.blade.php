<!-- manejo de processo exitosos y de errores -->

        @if (\Session::has('success'))
        <div class="mt-5 text-center alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif

        @if (\Session::has('error'))
        <div class="mt-5 text-center alert alert-danger">
            <ul>
                <li>{!! \Session::get('error') !!}</li>
            </ul>
        </div>
        @endif

        <div class="">

                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="mt-5 text-center text-danger">{{ $error }}</div>
                    @endforeach
                @endif
        </div> 