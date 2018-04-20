<div class="sidebar-panel">
    <div class="list-tre">
        <ul>
            <li>
                <a href="{{route('admin.dashboard')}}" class="{{active_class(if_route(['admin.dashboard']))}}">Dashboard</a>
            </li>
        </ul>
    </div>

    <div class="list-tre">
        <ul>
            <li class="has-dropdown">
                <a href="#">Site Manager</a>
                <div class="drop">
                    <ul>
                        <li><a href="{{route('admin.pagebuilder.index')}}" class="{{active_class(if_route(['admin.pagebuilder.index']))}}">Pages</a></li>
                        <li><a href="{{route('admin.pagetemplatebuilder.index')}}"  class="{{active_class(if_route(['admin.pagetemplatebuilder.index']))}}">Page Templates</a></li>
                        <li><a href="/admin/contentholders-index">Content Holders</a></li>
                        <li><a href="{{route('admin.webform.index')}}"  class="{{active_class(if_route(['admin.webform.index']))}}">Web Forms</a></li>
                        <li><a href="/admin/menus-index">Menus</a></li>                       
                        <li><a href="#">File Manager</a></li>
                        <li><a href="/admin/url-ridirects-index">URL Redirects</a></li>
                        <li><a href="/admin/systempages-index">System Pages</a></li>
                        <li><a href="/admin/systememails-index">System Emails</a></li>                        
                    </ul>
                </div>
            </li>            
            <li class="has-dropdown">
                <a href="#">Reports</a>
                <div class="drop">
                    <ul>
                        <li><a href="#">Visitors</a></li>
                        <li><a href="#">Traffic Sources</a></li>
                        <li><a href="#">Website Content</a></li>
                        <li><a href="#">Web Form Usage</a></li>
                        <li><a href="#">Custom Reports</a></li>
                        <li><a href="#">Admin Reports</a></li>
                    </ul>
                </div>
            </li>
            <li class="has-dropdown">
                <a href="#">Site Settings</a>
                <div class="drop">
                    <ul>
                        <li><a href="#">Site Domains</a></li>
                        <li><a href="#">Admin Users</a></li>
                        <li><a href="#">User Roles</a></li>
                        <li><a href="#">Mobile Support</a></li>
                        <li><a href="#">Site Billing</a></li>
                        <li><a href="#">Site Management</a></li>
                        <li><a href="#">Security Settings</a></li>
                        <li><a href="#">Beta Features</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</div>