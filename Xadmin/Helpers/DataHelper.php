<?php

// Return post url to preview post
if ( ! function_exists('_dataAmenities'))
{
    function _dataAmenities()
    {
        return array (
    		['title' => 'Garage'],
    		['title' => 'Beds'],
			['title' => 'Baths'],
			['title' => 'Air conditioning'],
			['title' => 'Irons'],
			['title' => 'Heating'],
			['title' => 'Internet'],
			['title' => 'Microwave'],
			['title' => 'Smoking allowed'],
			['title' => 'Use of pool'],
			['title' => 'Toaster'],
			['title' => 'Cofee pot'],
			['title' => 'Cable TV'],
			['title' => 'Roof terrace'],
			['title' => 'Terrace'],
			['title' => 'Towelwes'],
			['title' => 'Hi-Fi'],
			['title' => 'Beach'],
			['title' => 'Child Room'],
			['title' => 'Drawing room'],
			['title' => 'Security'],
			['title' => 'Camera Surveillance'],
			['title' => 'Nature'],
			['title' => 'Route path']
    	);
    }
}
// Return post url to preview post
if ( ! function_exists('_dataTagTypes'))
{
	function _dataTagTypes(){
		return [
			'category' => 'Category',
			'tag' => 'Tag',
		];
	}
}
