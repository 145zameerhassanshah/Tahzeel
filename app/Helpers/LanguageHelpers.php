<?php

if (!function_exists('getLocalizedField')) {
    function getLocalizedField($field, $locale)
    {
        $decodedField = json_decode($field, true);
        if (is_array($decodedField) && isset($decodedField[$locale])) {
            return $decodedField[$locale];
        }
        return $field; // Return original value if not localized
    }
}

if (!function_exists('localizeHeroSection')) {
    function localizeHeroSection($model, $locale)
    {
        if (!$model) return null;

        $model->title = getLocalizedField($model->title, $locale);
        $model->subtitle = getLocalizedField($model->subtitle, $locale);
        $model->description = getLocalizedField($model->description, $locale);

        return $model;
    }
}

if (!function_exists('localizeIntroductionSection')) {
    function localizeIntroductionSection($introductionSection, $locale)
    {
        if (!$introductionSection) {
            return null;
        }

        // Localize textual fields
        $introductionSection->title = getLocalizedField($introductionSection->title, $locale);
        $introductionSection->subtitle = getLocalizedField($introductionSection->subtitle, $locale);
        $introductionSection->description = getLocalizedField($introductionSection->description, $locale);
        $introductionSection->images = json_decode($introductionSection->images, true);;



        return $introductionSection;
    }
}

if (!function_exists('localizeSectionTitle')) {
    function localizeSectionTitle($sectionTitle, $locale)
    {
        if (!$sectionTitle) {
            return null;
        }

        // Localize textual fields
        $sectionTitle->title = getLocalizedField($sectionTitle->title, $locale);
        $sectionTitle->subtitle = getLocalizedField($sectionTitle->subtitle, $locale);

        return $sectionTitle;
    }
}




if (!function_exists('getImagePath')) {
    function getImagePath($image)
    {
        if ($image) {
            $imagePath = trim($image, '"'); // Remove extra quotes if they exist
            return $imagePath;
        }
        return null;
    }
}




?>
