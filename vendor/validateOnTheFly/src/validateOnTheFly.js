


//===================================================================================================
let validateOnTheFlyLocation = document.currentScript.src.slice(0,-20);
console.log(validateOnTheFlyLocation);
//===================================================================================================



//===================================================================================================
function scriptLoader(path, callback) {
    let script = document.createElement("script");
    script.type = "text/javascript";
    script.async = false;
    script.src = path;
    script.onload = function () {
        if (typeof (callback) === "function") {
            callback();
        }
    }

    try {
        let scriptOne = document.getElementsByTagName('script')[0];
        scriptOne.parentNode.insertBefore(script, scriptOne);
    } catch (e) {
        console.log(e);
    }
}
//===================================================================================================



//===================================================================================================
scriptLoader(validateOnTheFlyLocation+"/inputValidation.js");
scriptLoader(validateOnTheFlyLocation+"/notificationGenerator.js");
scriptLoader(validateOnTheFlyLocation+"/processor.js", function () {
    let pathToJSONConfig = validateOnTheFlyLocation+"/validateOnTheFlyJsonConfig.json";
    new Processor(pathToJSONConfig);
    //*********** DELETE the console.log line IF ValidateOnTheFly is loaded *******
    console.log("validateOnTheFly loaded");
});
//===================================================================================================