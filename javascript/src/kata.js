const processText = (phrase) => {
  const counter = phrase.split(' ')
    return `The text has in total ${counter.length} words`;
};

module.exports = {
  processText
};
