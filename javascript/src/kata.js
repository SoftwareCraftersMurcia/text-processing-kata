const processText = (phrase) => {
  const counter = phrase.split(' ')
    return `Those are the top ${counter.length} words used:`;
};

module.exports = {
  processText
};
