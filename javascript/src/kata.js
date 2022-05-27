const analyse = (text) => {

    if(text === undefined || text === ""){
        return [];
    }else{
        return [text];
    }
};

module.exports = { analyse };
