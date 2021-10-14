<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    
        <a class="navbar-brand" href="/">Cosmopoly</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                {{-- ユーザー詳細ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('users.show', 'ユーザー情報の編集', [], ['class' => 'nav-link']) !!}</li>
            </ul>
        </div>
    </nav>
</header>