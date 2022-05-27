const countWords = (phrase) => phrase.split(' ').length;

const processText = (phrase) => {
  return `The text has in total ${countWords(phrase)} words`;
};

module.exports = {
  processText
};
