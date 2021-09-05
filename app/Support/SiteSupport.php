<?php

namespace App\Support;

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

	public function storeContact($data)
	{
		$contact = new Contact();
		$contact->fill($data->all());
		if($contact->save()){
			return true;
		}else{
			return false;
		}
	}
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



}
?>