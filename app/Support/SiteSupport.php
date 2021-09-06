<?php

namespace App\Support;

use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Site;
use App\Support\ImageSupport;
/**
 * \
 */
class SiteSupport
{
	protected $imageSupport;
	protected $folder_name='site';
	function __construct(ImageSupport $imageSupport)
	{
		$this->imageSupport = $imageSupport;
	}

    public function getSite()
    {
    	return Site::findOrFail(1);
    }
	public function store($data)
	{
		$site = new Site();
		$site->fill($data->all());
		// image saving 
		$logo = $this->imageSupport->saveAnyImg($data, $this->folder_name, 'logo', 993, 474);
		$md_profile = $this->imageSupport->saveAnyImg($data, $this->folder_name, 'md_profile', 100, 100);
		$site->logo = $logo;
		$site->md_profile = $md_profile;
		if($site->save())
		{
			return true;
		}else{
			return false;
		}
	}



	public function update($data, $site)
	{
		$site->fill($data->all());
		if(!$data->file('logo')==''){
			$this->imageSupport->deleteImg($this->folde_name, $site->logo);
			$logo = $this->imageSupport->saveAnyImg($data, $this->folder_name, 'logo', 993, 474);
			$site->logo = $logo;
		}
		if(!$data->file('md_profile')== ''){
			$this->imageSupport->deleteImg($this->folder_name, $site->md_profile);
			$md_profile = $this->imageSupport->saveAnyImg($data, $this->folder_name, 'md_profile', 100, 100);
			$site->md_profile= $md_profile;
		}
		// image saving 
		if($site->save())
		{
			return true;
		}else{
			return false;
		}
	}
	// to store contact
	public function storeContact($data)
	{
		$contact = new Contact();
		$contact->fill($data->all());
		$sontact->site_id = 1;
		if($contact->save()){
			return true;
		}else{
			return false;
		}
	}
	// to Update contact
	public function updateContact($data, $contact)
	{
		$contact->fill($data->all());
		if($contact->save()){
			return true;
		}else{
			return false;
		}
	}

	public function getAllContacts()
	{
		return Contact::orderByDesc('created_at')->get();
	}

	// to retrive about
	public function getAbouts()
	{
		return AboutUs::orderByDesc('created_at')->get();
	}
	// to store about
	public function storeAbout($data)
	{
		$aboutUs = new AboutUs();
		$aboutUs->fill($data->all());
		$aboutUs->site_id = 1;
		$image = $this->imageSupport->saveAnyImg($data, $this->folder_name, 'image', 640, 444);
		$aboutUs->image=$image;
		if($aboutUs->save()){
			return true;
		}else{
			return false;
		}
	}
	// to Update About Us
	public function updateAbout($data, $aboutUs)
	{
		$aboutUs->fill($data->all());
		if(!$data->file('image')==''){
			$this->imageSupport->deleteImg($this->folder_name, $aboutUs->image);
			$image = $this->imageSupport->saveAnyImg($data, $this->folder_name, 'image', 640, 444);
			$aboutUs->image= $image;
		}
		if($aboutUs->save()){
			return true;
		}else{
			return false;
		}
	}
	// to delete about us record
	public function deleteAbout($aboutUs)
	{
		$this->imageSupport->deleteImg($this->folder_name, $aboutUs->image);
		if($aboutUs->delete())
		{
			return true;
		}else{
			return false;
		}
	}
	// to store the banner
	public function storeBanner($data)
	{
		$banner = new Banner();
		$banner->fill($data->all());
		$image = $this->imageSupport->saveAnyImg($data, 'banner', 'image', 1280, 853);
		$banner->image = $image;
		$banner->site_id=1;
		if($banner->save())
		{
			return true;
		}else{
			return false;
		}
	}
  // to banner update
	public function updateBanner($data, $banner)
	{
		$banner->fill($data->all());
		if(!$data->file('image')==''){
			$this->imageSupport->deleteImg('banner', $banner->image);
			$image = $this->imageSupport->saveAnyImg($data, 'banner', 'image', 1280, 853);
			$banner->image=$image;
		}
		if($banner->save()){
			return true;
		}else{
			return false;
		}
	}

	// banner delete
	public function bannerDelete($banner)
	{
		$this->imageSupport->deleteImg('banner', $banner->image);
		if($banner->delete()){
			return true;
		}else{
			return false;
		}
	}
}
?>