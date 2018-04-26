jQuery(function($) {
    var controlOrder = [
        'FullName',
        'EmailAddress',
        'CRMHomeAddress',
        'HomePhone',
        'HomeFax',
        'CRMWorkAddress',
        'WorkPhone',
        'WorkFax',
        'textarea'
    ];

    var defaultFields = [{
        type: 'select',
        label: 'Title',
        name: 'Title',
        values: [{
            label: 'Dr',
            value: 'Dr'
        }, {
            label: 'Miss',
            value: 'Miss'
        }, {
            label: 'Mr',
            value: 'Mr'
        }, {
            label: 'Mrs',
            value: 'Mrs'
        }, {
            label: 'Ms',
            value: 'Ms'
        }]
    }, {
        type: "text",
        label: "First Name",
        name: "FirstName",
        required: true
    }, {
        type: "text",
        label: "Last Name",
        name: "LastName",
        required: true
    }, {
        type: "text",
        label: "Email Address",
        name: "EmailAddress",
        required: true
    }];

    var fields = [{
            type: 'text',
            label: 'Email Address',
            name: 'EmailAddress',
            required: true
        },
        {
            type: 'text',
            label: 'Home Phone Number',
            name: 'HomePhone'
        },
        {
            type: 'text',
            label: 'Home Fax Number',
            name: 'HomeFax'
        },
        {
            type: 'text',
            label: 'Work Phone Number',
            name: 'WorkPhone'
        },
        {
            type: 'text',
            label: 'Work Fax Number',
            name: 'WorkFax'
        },
        {
            type: 'text',
            label: 'Cell Phone Number',
            name: 'CellPhone'
        },
        {
            type: 'text',
            label: 'Web Address',
            name: 'WebAddress'
        },
        {
            type: 'text',
            label: 'Company',
            name: 'Company'
        },
        {
            type: 'date',
            label: 'Date of Birth',
            name: 'DOB'
        },
        {
            type: 'text',
            label: 'Username',
            name: 'Username',
            required: true
        }
    ];

    var inputSets = [{
        label: 'Full Name',
        icon: 'ðŸ‘¨',
        name: 'FullName', // optional
        showHeader: true, // optional
        fields: [{
            type: 'select',
            label: 'Title',
            values: [{
                label: 'Dr',
                value: 'Dr'
            }, {
                label: 'Miss',
                value: 'Miss'
            }, {
                label: 'Mr',
                value: 'Mr'
            }, {
                label: 'Mrs',
                value: 'Mrs'
            }, {
                label: 'Ms',
                value: 'Ms'
            }]
        }, {
            type: 'text',
            label: 'First Name'
        }, {
            type: 'text',
            label: 'Last Name'
        }]
    }, {
        label: 'Home Address',
        icon: 'ðŸ‘¨',
        name: 'CRMHomeAddress', // optional
        showHeader: true, // optional
        fields: [{
            type: 'text',
            label: 'Address',
            name: 'HomeAddress'
        }, {
            type: 'text',
            label: 'City',
            name: 'HomeCity'
        }, {
            type: 'text',
            label: 'State',
            name: 'HomeState'
        }, {
            type: 'text',
            label: 'Postcode',
            name: 'HomeZip'
        }, {
            type: 'select',
            label: 'Country',
            name: 'HomeCountry',
            values: [{
                label: 'Australia',
                value: 'AU'
            }, {
                label: 'United States',
                value: 'US'
            }]
        }]
    }, {
        label: 'Work Address',
        icon: 'ðŸ‘¨',
        name: 'CRMWorkAddress', // optional
        showHeader: true, // optional
        fields: [{
            type: 'text',
            label: 'Address',
            name: 'WorkAddress'
        }, {
            type: 'text',
            label: 'City',
            name: 'WorkCity'
        }, {
            type: 'text',
            label: 'State',
            name: 'WorkState'
        }, {
            type: 'text',
            label: 'Postcode',
            name: 'WorkZip'
        }, {
            type: 'select',
            label: 'Country',
            name: 'WorkCountry',
            values: [{
                label: 'Australia',
                value: 'AU'
            }, {
                label: 'United States',
                value: 'US'
            }]
        }]
    }, {
        label: 'Shipping Address',
        icon: 'ðŸ‘¨',
        name: 'CRMShippingAddress', // optional
        showHeader: true, // optional
        fields: [{
            type: 'text',
            label: 'Address',
            name: 'ShippingAddress'
        }, {
            type: 'text',
            label: 'City',
            name: 'ShippingCity'
        }, {
            type: 'text',
            label: 'State',
            name: 'ShippingState'
        }, {
            type: 'text',
            label: 'Postcode',
            name: 'ShippingZip'
        }, {
            type: 'select',
            label: 'Country',
            name: 'ShippingCountry',
            values: [{
                label: 'Australia',
                value: 'AU'
            }, {
                label: 'United States',
                value: 'US'
            }]
        }]
    }, {
        label: 'Billing Address',
        icon: 'ðŸ‘¨',
        name: 'CRMBillingAddress', // optional
        showHeader: true, // optional
        fields: [{
            type: 'text',
            label: 'Address',
            name: 'BillingAddress'
        }, {
            type: 'text',
            label: 'City',
            name: 'BillingCity'
        }, {
            type: 'text',
            label: 'State',
            name: 'BillingState'
        }, {
            type: 'text',
            label: 'Postcode',
            name: 'BillingZip'
        }, {
            type: 'select',
            label: 'Country',
            name: 'BillingCountry',
            values: [{
                label: 'Australia',
                value: 'AU'
            }, {
                label: 'United States',
                value: 'US'
            }]
        }]
    }, {
        label: 'Password',
        icon: 'ðŸ‘¨',
        name: 'CRMPassword', // optional
        showHeader: true, // optional
        fields: [{
            type: 'text',
            label: 'Password',
            name: 'Password',
            required: true
        }, {
            type: 'text',
            label: 'Confirm Password',
            name: 'PasswordConfirm',
            required: true
        }]
    }];

    var typeUserDisabledAttrs = {
        autocomplete: ['access']
    };

    // test disabledAttrs
    var disabledAttrs = ['placeholder'];

    var fbOptions = {
        subtypes: {
            text: ['datetime-local']
        },
        onSave: function(e, formData) {
            toggleEdit();
            $('.render-wrap').formRender({
                formData: formData
            });
            window.sessionStorage.setItem('formData', JSON.stringify(formData));
        },
        stickyControls: {
            enable: true
        },
        sortableControls: true,
        fields: fields,
        inputSets: inputSets,
        typeUserDisabledAttrs: typeUserDisabledAttrs,
        disableInjectedStyle: false,
        disableFields: ['autocomplete', 'button', 'header', 'hidden', 'paragraph', 'number'],
        disabledFieldButtons: {
            text: ['copy']
        },
        defaultFields: defaultFields,
        controlOrder: controlOrder,
        // controlPosition: 'left'
        disabledAttrs: [
         'access',
         'className',
         'description',
         'inline',
         // 'label',
         'max',
         'maxlength',
         'min',
         'multiple',
         // 'name',
         // 'options',
         'other',
         'placeholder',
         // 'required',
         'rows',
         'step',
         'style',
         'subtype',
         'toggle',
         // 'value'
         ],
        typeUserDisabledAttrs: {
            'checkbox-group': [
                'name',
                'description',
                'required',
                'inline',
                'toggle'
            ]
        },
        showActionButtons: false
    };
    var formData = window.sessionStorage.getItem('formData');
    var editing = true;

    if (formData) {
        fbOptions.formData = JSON.parse(formData);
    }

    var setFormData = '[{"type":"text","label":"Full Name","subtype":"text","className":"form-control","name":"text-1476748004559"},{"type":"select","label":"Occupation","className":"form-control","name":"select-1476748006618","values":[{"label":"Street Sweeper","value":"option-1","selected":true},{"label":"Moth Man","value":"option-2"},{"label":"Chemist","value":"option-3"}]},{"type":"textarea","label":"Short Bio","rows":"5","className":"form-control","name":"textarea-1476748007461"}]';

    var formBuilder = $('.build-wrap').formBuilder(fbOptions);
});