<style>
    .avatar{
        padding: 20px;
        width: 100%;
        position: relative;
        height: 70px;
    }
    .avatar img {
        border-radius: 100%;
        max-width: 45px;
    }
    .avatar .img-avatar{
        float: left;
    }
    .avatar .w-user{
        float: left;
        line-height: 1;
        padding: 15px 5px 5px 5px;
        color: #fff;
    }

    .sidebar-list{
        margin-top: 20px;
    }
</style>
<div class="sidebar">
    <div class="avatar">
        <div class="img-avatar">
            <img src="/img/avatar.jpg" alt="">
        </div>
        <div class="w-user" align="center">
            <p>Bem Vindo</p>
            <span>{{ Auth::user()->email }}</span>  
        </div>
        <div class="w-user">
            
        </div>
    </div>
    <div class="sidebar-list">
        <ul style="margin-top: 50px">
            @if(auth()->User()->isAdmin())
            <li>
                <a href="{{ route('site.panel.user.index') }}">
                    <i class="fa fa-user"></i>
                    <span>Usuários</span>
                </a>
            </li>
            @endif
                
            <li>
                <a href="{{ route('site.panel.member.index') }}">
                    <i class="fa fa-users"></i>
                    <span>Membros</span>
                </a>
            </li>
            <li>
                <a href="{{ route('site.panel.church.index') }}">
                    <i class="fa fa-university"></i>
                    <span>Igreja</span>
                </a>
            </li>
            <li>
                <a href="#about">
                    <i class="fa fa-gear"></i>
                    <span>Configurações</span>
                </a>
            </li>
        </ul>
    </div>
</div>