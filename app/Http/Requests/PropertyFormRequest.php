<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PropertyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
//        if($this->route('floor')->id){
//            $this->merge([
//                'floor_id' => $this->route('floor')->id
//            ]);
//        }

        $this->merge([
            'investment_id' => $this->route('investment')->id
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'investment_id' => [
                'required',
                'integer',
                Rule::exists('investments', 'id'), // Check if investment with the specified id exists
            ],
            'floor_id' => '',
            'status' => 'required',
            'name' => 'required|string|max:255',
            'name_list' => 'string|max:255',
            'number' => 'required|string|max:255',
            'number_order' => 'integer',
            'homepage' => '',
            'rooms' => 'required|integer',
            'area' => '',
            'additional' => '',
            'garden_area' => '',
            'balcony_area' => '',
            'balcony_area_2' => '',
            'terrace_area' => '',
            'terrace_area_2' => '',
            'loggia_area' => '',
            'parking_space' => '',
            'garage' => '',
            'storeroom' => '',
            'deadline' => '',
            'kitchen_type' => 'integer',
            'visitor_related_type' => 'integer',
            'visitor_related_ids' => 'required_if:visitor_related_type,3|array|min:1',
            'type' => 'required|integer',
            'price' => ['nullable', 'regex:/^\d+(\.\d{1,2})?$/'],
            'price_brutto' => ['nullable', 'regex:/^\d+(\.\d{1,2})?$/'],
            'promotion_price' => [
                'nullable',
                'numeric',
                function ($attribute, $value, $fail) {
                    if (!empty($value) && !$this->boolean('highlighted')) {
                        $fail('Pole "Promocja" musi być zaznaczone, jeśli ustawiono cenę promocyjną.');
                    }
                },
            ],
            'highlighted' => [
                'boolean',
                function ($attribute, $value, $fail) {
                    if ($this->boolean($attribute) && empty($this->input('promotion_price'))) {
                        $fail('Pole "Cena promocyjna" jest wymagane, jeśli nieruchomość ma być promowana.');
                    }
                },
            ],
            'cords' => '',
            'html' => '',
            'meta_title' => '',
            'meta_description' => ''
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'client_id.exists' => 'The selected client does not exist.',
            'saled_at.date' => 'The saled at must be a valid date.',
            'reservation_until.date' => 'The reservation until must be a valid date.',
            'reservation_until.after_or_equal' => 'The reservation until must be a date after or equal to the saled at date.',
            'price_brutto.numeric' => 'Pole "Cena brutto" musi być liczbą.',
            'price_brutto.regex' => 'Pole "Cena brutto" musi zawierać maksymalnie dwie cyfry po przecinku.',

            // Add these for your visitor_related_ids validation:
            'visitor_related_ids.required' => 'Musisz wybrać dodatkowe powierzchnie.',
            'visitor_related_ids.min' => 'Musisz wybrać przynajmniej jedną dodatkową powierzchnię.',
            'visitor_related_ids.array' => 'Nieprawidłowy format powierzchni dodatkowych.',
            'visitor_related_ids.required_if' => 'Pole "Powierzchnie dodatkowe" jest wymagane, gdy wybrano opcję "Tylko wybrane".',
        ];
    }
}
