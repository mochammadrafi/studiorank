function tagify(targetComponent, configCustom) {
    var configSuggestion = {
        dropdown: {
            classname: "tagify__inline__suggestions",
            enabled: 0,
        }
    }
    var config = {
        ...configCustom,
        ...configSuggestion
    }
    new Tagify(targetComponent, config);
}