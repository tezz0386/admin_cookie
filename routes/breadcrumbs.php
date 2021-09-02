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
 ?>