<nav class="navigation">
    <a href="/" class="navigation__link @isset($title) @if($title === 'Пользователи') navigation__link_active @endif @endif">Пользователи</a>
    <a href="/categories" class="navigation__link @isset($title) @if($title === 'Категории') navigation__link_active @endif @endif ">Категории</a>
    <a href="/chanel" class="navigation__link @isset($title) @if($title === 'Каналы') navigation__link_active @endif @endif" >Каналы</a>
    <a href="/subscribe" class="navigation__link @isset($title) @if($title === 'Подписки') navigation__link_active @endif @endif">Подписки</a>
    <a href="/settings" class="navigation__link @isset($title) @if($title === 'Настройки') navigation__link_active @endif @endif">Настройки</a>
</nav>
