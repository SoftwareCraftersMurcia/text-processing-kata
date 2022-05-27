const { processText } = require('../src/kata');

describe("text processor tests", () => {
  describe('regarding the words count', function () {
    it.each`
      phrase                                                                                                       | expectedCount
      ${'word'}                                                                                                    |  ${1}
      ${'two words'}                                                                                               |  ${2}
      ${'Hello, this is an example for you to practice. You should grab this text and make it as your test case.'} |  ${21}
    `("should count $expectedCount for the phrase '$phrase' ", ({phrase, expectedCount}) => {
       const text = processText(phrase);
       const expectedText = `The text has in total ${expectedCount} words`

      expect(text).toContain(expectedText)
    });
  });
});


