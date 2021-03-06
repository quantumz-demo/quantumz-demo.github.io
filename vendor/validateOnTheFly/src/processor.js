// this class will get formData, process data, call other necessary class
class Processor {
    constructor(jsonConfigURL) {

        this.getJsonData(jsonConfigURL)
            .then((jsonData) => {
                let elementsToApplyValidationOn = jsonData["elementsToApplyValidationOn"];
                for (let formId in elementsToApplyValidationOn) {
                    if (elementsToApplyValidationOn.hasOwnProperty(formId)
                    && document.getElementById(formId) !== null) {
                        this.processing("#" + formId, jsonConfigURL);
                    }
                }
                return jsonData;
            })
            .catch(function (error) {
                console.log(error);
            });

    }

    processing(selector, jsonConfigURL) {
        let form = document.querySelector(selector);
        form.addEventListener("submit", (event) => {
            event.preventDefault();
            let postURL = this.getFormAction(form);
            let requestMethod = this.getFormRequestMethod(form);
            let formDataEncoded = this.getFormDataToKeyValueArrayEncodedURL(form);
            let formData = this.getFormDataToKeyValue(form);
            let formId = this.getFormId(form);
            let dataToSubmit = formDataEncoded.join("&");

            let inputValidation = new InputValidation(formId, formData, jsonConfigURL);

            let that = this;
            let timer = setTimeout(function () {


                if (inputValidation["validated"] === true) {
                    that.sendData(requestMethod, postURL, dataToSubmit);
                }
                if (typeof (inputValidation["resetFormUponSubmitValue"]) !== "undefined") {
                    new Notification(inputValidation["inputValidationRecap"], jsonConfigURL);
                }
                clearTimeout(timer);
            }, 100);
        });
    }



//get all form inputs and values as key value into an array
    getFormDataToKeyValueArrayEncodedURL(form) {
        let formDataEncoded = [];
        for (let i = 0; i < form.elements.length; i++) {
            let element = form.elements[i];
            formDataEncoded.push(encodeURIComponent(element.name) + "=" + encodeURIComponent(element.value));
        }
        return formDataEncoded;
    }

    //convert form data to array of key value, key is inputName, value is input value
    getFormDataToKeyValue(form) {
        let formData = [];
        for (let i = 0; i < form.elements.length; i++) {
            let element = form.elements[i];
            formData.push(element.name + "=" + element.value);
        }
        return formData;
    }

//get the form ID
    getFormId(element) {
        return element.getAttribute("id");
    }

//getting the action attribute from a form
    getFormAction(element) {
        return element.getAttribute("action");
    }

//getting the method attribute from a form
    getFormRequestMethod(element) {
        return element.getAttribute("method");
    }

//sending data with an ajax request
    sendData(requestMethod, postURL, dataToSubmit) {
        let request = new XMLHttpRequest();

        request.open(requestMethod, postURL, true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        request.send(dataToSubmit);
    }

    getJsonData(jsonConfigFileURL) {
        let xhr = new XMLHttpRequest();

        return new Promise(function (resolve, reject) {
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    resolve(JSON.parse(this.responseText));
                }

            };
            xhr.open("GET", jsonConfigFileURL, true);
            xhr.send();
        });
    }
}

