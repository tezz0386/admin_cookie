<?php 
    Breadcrumbs::for('admin.dashboard', function($trail){
    	$trail->push('Home', route('admin.dashboard'));
    });
    Breadcrumbs::for('admin.category.index', function($trail){
    	$trail->parent('admin.dashboard');
    	$trail->push('Category', route('admin.category.index'));
    });
    Breadcrumbs::for('admin.category.create', function($trail){
    	$trail->parent('admin.category.index');
    	$trail->push('Create', route('admin.category.create'));
    });
    Breadcrumbs::for('admin.category.edit', function($trail, $category){
    	$trail->parent('admin.category.index');
    	$trail->push('Update', route('admin.category.edit', $category));
    });
    Breadcrumbs::for('admin.category.details', function($trail, $category){
    	$trail->parent('admin.category.index');
    	$trail->push('Detail', route('admin.category.details', $category));
    });
    Breadcrumbs::for('admin.category.trash.index', function($trail){
    	$trail->parent('admin.category.index');
    	$trail->push('Category Trashd List', route('admin.category.trash.index'));
    });
    Breadcrumbs::for('admin.subcategory.create', function($trail, $category){
    	$trail->parent('admin.category.index');
    	$trail->push('Sub Category Create', route('admin.subcategory.create', $category));
    });
     Breadcrumbs::for('admin.subcategory.index', function($trail){
    	$trail->parent('admin.category.index');
    	$trail->push('Sub Category List', route('admin.subcategory.index'));
    });
     Breadcrumbs::for('admin.subcategory.edit', function($trail, $subCategory){
     	$trail->parent('admin.subcategory.index');
     	$trail->push('Update', route('admin.subcategory.edit', $subCategory));
     });
     Breadcrumbs::for('admin.subcategory.trash', function($trail){
     	$trail->parent('admin.subcategory.index');
     	$trail->push('Trash List', route('admin.subcategory.trash'));
     });

     Breadcrumbs::for('admin.subcategory.create-again', function($trail){
     	$trail->parent('admin.subcategory.index');
     	$trail->push('Create', route('admin.subcategory.create-again'));
     });
     Breadcrumbs::for('admin.subcategory.show', function($trail, $subCategory){
        $trail->parent('admin.subcategory.index');
        $trail->push('Show', route('admin.subcategory.show', $subCategory));
     });

     // for login breadcrums
     Breadcrumbs::for('login', function($trail){
        $trail->push('Login', route('login'));
     });

     // for product breadcrumbs
    Breadcrumbs::for('product.index', function ($trail) {
        $trail->parent('admin.dashboard');
        $trail->push('Product', route('product.index'));
    });
    Breadcrumbs::for('product.create', function($trail){
        $trail->parent('product.index');
        $trail->push('Create', route('product.create'));
    });

    Breadcrumbs::for('product.edit', function ($trail, $product) {
        $trail->parent('product.index');
        $trail->push('Update', route('product.edit', $product));
    });
    Breadcrumbs::for('product.getTrash', function ($trail) {
        $trail->parent('product.index');
        $trail->push('Trash List', route('product.getTrash'));
    });
     Breadcrumbs::for('product.show', function ($trail, $product) {
        $trail->parent('product.index');
        $trail->push('Show Details', route('product.show', $product));
    });

    // breadcrumbs for site setting
     Breadcrumbs::for('site.index', function($trail){
            $trail->parent('admin.dashboard');
            $trail->push('Site Setting', route('site.index'));
     });
     Breadcrumbs::for('site.edit', function($trail, $site){
        $trail->parent('site.index');
        $trail->push('Update', route('site.edit', $site));
     });
     // breadcrumbs for site contact setting
     Breadcrumbs::for('contact.index', function($trail){
        $trail->parent('site.index');
        $trail->push('Contacts', route('contact.index'));
     });
    Breadcrumbs::for('contact.create', function($trail){
        $trail->parent('contact.index');
        $trail->push('Create', route('contact.create'));
     });
    Breadcrumbs::for('contact.edit', function($trail, $contact){
        $trail->parent('contact.index');
        $trail->push('Update', route('contact.edit', $contact));
    });


    // breadcrumbs for site about us setting
    Breadcrumbs::for('about.index', function($trail){
        $trail->parent('site.index');
        $trail->push('About Us', route('about.index'));
    });

     Breadcrumbs::for('about.create', function($trail){
        $trail->parent('about.index');
        $trail->push('Create', route('about.create'));
    });
     Breadcrumbs::for('about.edit', function($trail, $aboutUs){
        $trail->parent('about.index');
        $trail->push('Update', route('about.edit', $aboutUs));
     });

     // breadcrumbs for banner
     Breadcrumbs::for('banner.index', function($trail){
        $trail->parent('site.index');
        $trail->push('Banner', route('banner.index'));
     });

     Breadcrumbs::for('banner.create', function($trail){
        $trail->parent('banner.index');
        $trail->push('Create', route('banner.create'));
     });
     Breadcrumbs::for('banner.edit', function($trail, $banner){
        $trail->parent('banner.index');
        $trail->push('Update', route('banner.edit', $banner));
     });


     // route for special 
     Breadcrumbs::for('special.index', function($trail){
        $trail->parent('admin.dashboard');
        $trail->push('Special', route('special.index'));
     });
      Breadcrumbs::for('special.create', function($trail){
        $trail->parent('special.index');
        $trail->push('Create', route('special.create'));
     });

     // for user 
     Breadcrumbs::for('profile.edit', function ($trail) {
        $trail->parent('admin.dashboard');
        $trail->push('Account', route('profile.edit'));
    });



     // for icon
     Breadcrumbs::for('page.index', function ($trail) {
        $trail->parent('admin.dashboard');
        $trail->push('Icon', route('page.index', 'icon'));
     });
 
 ?>