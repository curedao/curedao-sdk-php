<?php
namespace CureDAO\Client\VariableCategories;
use CureDAO\Client\Modelss\Variable;
use CureDAO\Client\UI\FontAwesome;
use Illuminate\Database\Eloquent\Builder;
use CureDAO\Client\VariableCategories\BaseVariableCategory;
class MiscellaneousVariableCategory extends BaseVariableCategory {
	const AMAZON_PRODUCT_CATEGORY = null;
	const APP_TYPE = 'general';
	const BORING = true;
	const CAUSE_ONLY = false;
	const COMBINATION_OPERATION = 'MEAN';
	const COMMON = null;
	const DEFAULT_UNIT_ABBREVIATED_NAME = null;
	const DEFAULT_UNIT_ID = null;
	const DURATION_OF_ACTION = 86400;
	const EFFECT_ONLY = null;
	const FILLING_TYPE = null;
	const FILLING_VALUE = -1;
	const FONT_AWESOME = FontAwesome::RANDOM_SOLID;
	const ID = 5;
    const IMAGE_URL = 'https://static.quantimo.do/img/variable_categories/categorize-96.png';
	const ION_ICON = 'ion-help';
	const MANUAL_TRACKING = false;
	const MAXIMUM_ALLOWED_VALUE = null;
	const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = null;
	const MINIMUM_ALLOWED_VALUE = null;
	const MORE_INFO = "Last resort for variables that don't fall into any of the available categories. ";
	const NAME = 'Miscellaneous';
	const ONSET_DELAY = 0;
	const OUTCOME = true;
	const PNG_PATH = 'img/variable_categories/miscellaneous.png';
    const PNG_URL = 'https://static.quantimo.do/img/variable_categories/miscellaneous.png';
	const PREDICTOR = true;
	const PUBLIC = false;
	const SETUP_QUESTION = null;
	const STUDY_IMAGE_FILE_NAME = null;
	const SUFFIX = null;
	const SVG_PATH = 'img/variable_categories/miscellaneous.svg';
    const SVG_URL = 'https://static.quantimo.do/img/variable_categories/miscellaneous.svg';
	const SYNONYMS = ['Miscellaneous', 'Uncategorized'];
	const VALENCE = null;
	const VARIABLE_CATEGORY_NAME_SINGULAR = 'Uncategorized Variable';
    public $amazonProductCategory = self::AMAZON_PRODUCT_CATEGORY;
	public $appType = self::APP_TYPE;
	public $boring = self::BORING;
	public $causeOnly = self::CAUSE_ONLY;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $common = self::COMMON;
	public $defaultUnitAbbreviatedName = self::DEFAULT_UNIT_ABBREVIATED_NAME;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $effectOnly = self::EFFECT_ONLY;
	public $fillingType = self::FILLING_TYPE;
	public $fillingValue = self::FILLING_VALUE;
	public $fontAwesome = self::FONT_AWESOME;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $ionIcon = self::ION_ICON;
	public $manualTracking = self::MANUAL_TRACKING;
	public $maximumAllowedValue = self::MAXIMUM_ALLOWED_VALUE;
	public $minimumAllowedSecondsBetweenMeasurements = self::MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS;
	public $minimumAllowedValue = self::MINIMUM_ALLOWED_VALUE;
	public $moreInfo = self::MORE_INFO;
	public $name = self::NAME;
	public $onsetDelay = self::ONSET_DELAY;
	public $outcome = self::OUTCOME;
	public $pngPath = self::PNG_PATH;
	public $pngUrl = self::PNG_URL;
	public $predictor = self::PREDICTOR;
	public $public = self::PUBLIC;
	public $setupQuestion = self::SETUP_QUESTION;
	public $studyImageFileName = self::STUDY_IMAGE_FILE_NAME;
	public $suffix = self::SUFFIX;
	public $svgPath = self::SVG_PATH;
	public $svgUrl = self::SVG_URL;
	public $synonyms = self::SYNONYMS;
	public $valence = self::VALENCE;
	public $variableCategoryNameSingular = self::VARIABLE_CATEGORY_NAME_SINGULAR;
}
