<?php
namespace CureDAO\Client\Variables\NutrientsVariables;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\NutrientsVariableCategory;
use CureDAO\Client\Units\RecommendedDailyAllowanceUnit;
class MagnesiumVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const DEFAULT_UNIT_ID = RecommendedDailyAllowanceUnit::ID;
	public const DURATION_OF_ACTION = 604800;
	public const ID = 1949;
	public const IMAGE_URL = 'https://images-na.ssl-images-amazon.com/images/I/413m9XIoQtL._SL160_.jpg';
	public const NAME = 'Magnesium';
	public const PRICE = 29.989999999999998;
	public const PRODUCT_URL = 'https://www.amazon.com/Doctors-Best-Absorption-Magnesium-Glycinate/dp/B000BD0RT0?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B000BD0RT0';
	public const PUBLIC = true;
	public const SYNONYMS = ['Magnesium'];
	public const VARIABLE_CATEGORY_ID = NutrientsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
