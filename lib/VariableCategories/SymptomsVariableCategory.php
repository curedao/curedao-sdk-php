<?php
namespace CureDAO\Client\VariableCategories;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\VariableCategories\BaseVariableCategory;
class SymptomsVariableCategory extends BaseVariableCategory {
	const AMAZON_PRODUCT_CATEGORY = null;
	const BORING = null;
	const CAUSE_ONLY = false;
	const COMBINATION_OPERATION = 'MEAN';
	const COMMON = true;
	const DEFAULT_UNIT_ABBREVIATED_NAME = '/5';
	const DEFAULT_UNIT_ID = 10;
	const DURATION_OF_ACTION = 86400;
	const EFFECT_ONLY = null;
    const FEATURE = "Discover the factors most likely to exacerbate or improve severity.";
    const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_NONE;
    const FILLING_VALUE = -1;
	const HELP_TEXT = 'What symptom do you want to record?';
	const FONT_AWESOME = FontAwesome::HEAD_SIDE_COUGH_SOLID;
	const ID = 10;
    const IMAGE_URL = 'https://static.quantimo.do/img/variable_categories/sad-96.png';
	const ION_ICON = 'ion-sad-outline';
	const MANUAL_TRACKING = true;
	const MAXIMUM_ALLOWED_VALUE = null;
	const MEASUREMENT_SYNONYM_SINGULAR_LOWERCASE = 'rating';
	const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = 60;
	const MINIMUM_ALLOWED_VALUE = null;
	const MORE_INFO = 'Symptom severity can be influence by hundreds of factors in daily life. The human mind can only hold 7 numbers in working memory at a time.  I can hold a billion in my mind! If you regularly record your symptoms, add them so I can use this data to determine which hidden and imperceptible factors might be worsening or improving them.';
	const NAME = 'Symptoms';
	const ONSET_DELAY = 0;
	const OUTCOME = true;
	const PNG_PATH = 'img/variable_categories/symptoms.png';
    const PNG_URL = 'https://static.quantimo.do/img/variable_categories/symptoms.png';
	const PREDICTOR = true;
	const PUBLIC = true;
	const SETUP_QUESTION = 'What is a negative health symptom you are experiencing?';
	const STUDY_IMAGE_FILE_NAME = null;
	const SUFFIX = null;
	const SVG_PATH = 'img/variable_categories/symptoms.svg';
    const SVG_URL = 'https://static.quantimo.do/img/variable_categories/symptoms.svg';
	const SYNONYMS = ['Symptoms', 'Symptom'];
	const VALENCE = 'negative';
	const VARIABLE_CATEGORY_NAME = 'Symptoms';
	const VARIABLE_CATEGORY_NAME_SINGULAR = 'Symptom';
    public $amazonProductCategory = self::AMAZON_PRODUCT_CATEGORY;
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
	public $helpText = self::HELP_TEXT;
	public $fontAwesome = self::FONT_AWESOME;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $ionIcon = self::ION_ICON;
	public $manualTracking = self::MANUAL_TRACKING;
	public $maximumAllowedValue = self::MAXIMUM_ALLOWED_VALUE;
	public $measurementSynonymSingularLowercase = self::MEASUREMENT_SYNONYM_SINGULAR_LOWERCASE;
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
	public $variableCategoryName = self::VARIABLE_CATEGORY_NAME;
	public $variableCategoryNameSingular = self::VARIABLE_CATEGORY_NAME_SINGULAR;
}
