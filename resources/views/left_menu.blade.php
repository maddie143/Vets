<div style="position:fixed; top:20%;">
    <div id="menu-click" class=" d-flex justify-content-center align-items-center" style="border-bottom:1px solid white;width:30px; position:absolute; bottom:100%; height:30px; background-color:#BF6B63">
        <i class="fas fa-home" style="font-size:12px; color:white;"></i>
    </div>
</div>
<script>
    $("#menu-click").click(function(){
        var open_close_menu = $("#menu-click");
        var menu_container = $("#menu-container");
        if(menu_container.hasClass("d-none")){
            $("#menu-click i").removeClass('fa-home');
            $("#menu-click i").addClass('fa-times');
            menu_container.addClass('d-block');
            menu_container.removeClass('d-none');
        }
        else {
            $("#menu-click i").removeClass('fa-times');
            $("#menu-click i").addClass('fa-home');

            menu_container.removeClass('d-block');
            menu_container.addClass('d-none');
        }
    });
</script>
<div id="menu-container" class="col-3 col-md-1 p-0 d-none" style="width:90px;position:fixed;top:20%;border-radius:0 3px 3px 3px ; height:400px; background-color:#BF6B63;">
    <div class="row m-0 p-0 h-100 w-100 justify-content-center " style="border-radius:0 5px 5px 0;">

        <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
            <a href="{{ route('show_homepage') }}" class="menu-text" style="text-decoration: none">HOME</a>
        </div>
        <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
            <a href="{{ route('show_all_vet') }}" class="menu-text" style="text-decoration: none">CABINETE</a>
        </div>
        <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
            <a href="{{ route('show_all_service') }}" class="menu-text" style="text-decoration: none">SERVICII</a>
        </div>
        @if((\Auth::user() && \Auth::user()->profile_type == 1) || (!\Auth::user()))
            <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
                <a href="{{ route('add_appointment') }}" class="menu-text" style="text-decoration: none">PROGRAMARI</a>
            </div>
        @endif
        <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
            <a href="{{ route('show_emergency') }}" class="menu-text" style="text-decoration: none">URGENTE</a>
        </div>
        <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
            <a href="{{ route('show_login') }}" class="menu-text" style="text-decoration: none">CONT</a>
        </div>
    </div>
    <style>
        .menu-text {
            color: #40302A;
            font-size:12px;
        }
        .menu-option{
            border-bottom: 1px solid #F2F0F0;
        }
        .menu-option:last-of-type {
            border-bottom:none;
        }
    </style>

</div>
