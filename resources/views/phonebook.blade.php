
        @include('header')
        @include('messages')

        
        <div class=" bg-primary ">

            <div class="row">

                <div class="col-lg-4 mx-auto my-5 ">
                    <h3 class="text-light">Phonebook </h3>
                    <a href="/phonebook/create" class="btn btn-dark my-1 mx-auto" >Add new</a>
                    <form action="/search" method="get">
                        <input type="search" name="search" id="search" value="" class="form-control" placeholder="Search by name or phone">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-secondary">search</button>
                        </span>
                    </form>
                </div>
            </div>
        </div>


        @include('footer')
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>