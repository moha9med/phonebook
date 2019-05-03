
        @include('header')
        @include('messages')

        
        <div class=" bg-primary ">

            <div class="row">

                <div class="col-lg-4 mx-auto my-5 ">
                    <h3 class="text-light text-right">سجل الهاتف </h3>
                    <a href="/phonebook/create" class="btn btn-dark my-1 mx-auto pull-right" >إضافة سجل جديد</a>
                    <form action="/search" method="get">
                        <input type="search" name="search" id="search" value="" class="form-control text-right" placeholder="ابحث بالاسم أو برقم الهاتف">
                        <span class="input-group-btn pull-right">
                            <br>
                            <button type="submit" class="btn btn-secondary">بحث</button>
                        </span>
                    </form>
                </div>
            </div>
        </div>


        @include('footer')
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>