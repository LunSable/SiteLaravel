<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->

<!-- <html lang="ru-RU"> -->
<head>
	<meta charset="UTF-8">
	<title>Книги</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/CSS/style_about.css">

</head>
<body>
	<!--[if lt IE 9]>
		<h1>Я виден только в ИЕ 8 и меньше</h1>
	<![endif]-->
	
	<div class="wrapper">
        <header class="header">
            <div class="container clearfix">
                <div class="header_left">
                    <div class="user_info">
                        <a href="" class="user_link">
                            <img src="https://avatars0.githubusercontent.com/u/62185555?s=460&u=6dffa45b11b311a47f76cd70afa2ea43f96db3ef&v=4" alt="" class="user_avatar">
                            <div class="user_username"><a href="https://github.com/LunSable?tab=repositories" class="link_git">Вадим Искандаров</a></div>
                        </a>
                    </div>
                </div>

                <div class="header_right">
                    @guest
                    <a href="/register" class="quest">Регистрация</a>
                    <a href="/login" class="quest">Войти</a>
                    @endguest
                    @auth
                    <a href="{{route('get-logout')}}" class="quest">Выйти</a>
                    @endauth
                </div>
            </div>
        </header>

        <main class="main_content">
            <div class="container clearfix">
                <aside class="sidebar">
                    <nav class="sidebar_nav">
                        <ul class="sidebar_list">
                            <li class="sidebar_item">
                                <a href="/" class="sidebar_link ">
                                    <i class="fa fa-book sidebar_icon" aria-hidden="true"></i>
                                    <span class="sidebar_text">Список книг</span>
                                </a>
                            </li>
                            <li class="sidebar_item">
                                <a href="/author" class="sidebar_link">
                                    <i class="fa fa-users sidebar_icon" aria-hidden="true"></i>
                                    <span class="sidebar_text">Авторы книг</span>
                                </a>
                            </li>
                            @auth
                            <li class="sidebar_item">
                                <a href="/admin" class="sidebar_link sidebar_link_active">
                                    <i class="fa fa-user-circle sidebar_icon" aria-hidden="true"></i>
                                    <span class="sidebar_text">Админ меню</span>
                                </a>
                            </li>
                            @endauth
                        </ul>
                    </nav>
                 </aside>

                <div class="books_title clearfix">
                    <h1>Меню управления</h1>
                    <div class="admin_block">
                        <div class="admin_content">
                            <i class="fa fa-file" aria-hidden="true"></i>
                            Контент:
                        </div>
                        <div class="admin_menu">
                            <div class="admin_books">
                                <div class="admin_block_name">Книги</div>
                                <ul class="admin_list">
                                    <li class="admin_button_block">
                                        <i class="fas fa-plus"></i>
                                        <a href="/add" class="admin_link">Добавить</a>
                                    </li>
                                    <li class="admin_button_block">
                                        <i class="fas fa-exchange-alt"></i>
                                        <a href="/change" class="admin_link">Редактировать и удалить</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="admin_authors">
                                <div class="admin_block_name">Авторы</div>
                                <ul class="admin_list">
                                    <li class="admin_button_block">
                                        <i class="fas fa-plus"></i>
                                        <a href="/add/author" class="admin_link">Добавить</a>
                                    </li>
                                    <li class="admin_button_block">
                                        <i class="fas fa-exchange-alt"></i>
                                        <a href="/author/change" class="admin_link">Редактировать и удалить</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="admin_users">
                    <div class="admin_content">
                        <i class="fa fa-id-card" aria-hidden="true"></i>    
                        Пользователи:
                    </div>
                        <div class="admin_root admin_menu">
                            <div class="admin_roots">
                                <div class="admin_block_name">Права пользователей</div>
                                <ul class="admin_list">
                                    <li class="admin_button_block">
                                        <i class="fas fa-plus"></i>
                                        <a href="/add/role" class="admin_link">Добавить роль</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="admin_users_block">
                            <div class="admin_block_name">Пользователи</div>
                                <ul class="admin_list">
                                    <li class="admin_button_block">
                                        <i class="fas fa-plus"></i>
                                        <a href="/add/user" class="admin_link">Добавить пользователя</a>
                                    </li>
                                    <li class="admin_button_block">
                                        <i class="fa fa-user-secret" aria-hidden="true"></i>
                                        <a href="/roles" class="admin_link">Редактировать и удалить</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </main>

        </div>

        <footer class="footer ">
            <div class="container clearfix">
                <div class="footer_left">
                    <div class="footer_left_text">Для третьего задания по практике</div>
                </div>
                <div class="footer_right">
                    <div class="footer_right_icons">
                        <ul class="footer_icons">
                            <li class="footer_icon">
                                <a href="" class="footer_icons_link footer_icons_link_git">
                                    <img src="https://www.pngkey.com/png/full/178-1787508_github-icon-download-at-icons8-white-github-icon.png" alt="" class="footer_img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

	
	
</body>
</html>