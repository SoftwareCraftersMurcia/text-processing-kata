package com.katas.java;

import org.assertj.core.api.BDDAssumptions;
import org.junit.jupiter.api.Test;

import static org.assertj.core.api.Assertions.assertThat;
import static org.assertj.core.api.BDDAssertions.then;
import static org.assertj.core.api.BDDAssumptions.given;

class TextProcessorTest {

  private TextProcessor textProcessor = new TextProcessor();

  @Test
  void should_count_0_words_when_text_is_empty() {
    TextProcessor textProcessor = new TextProcessor();

    TextAnalyzed textAnalyzed = textProcessor.analyse("");

    then(textAnalyzed.wordCount()).isEqualTo(0);
  }

  @Test
  void should_empty_top_words_when_text_is_empty() {
    TextProcessor textProcessor = new TextProcessor();

    TextAnalyzed textAnalyzed = textProcessor.analyse("");

    then(textAnalyzed.topWords()).isEmpty();
  }

  @Test
  void should_count_words_when_two_word_are_given() {
    String givenTwoWords = "one two";

    TextAnalyzed textAnalyzed = textProcessor.analyse(givenTwoWords);

    then(textAnalyzed.wordCount()).isEqualTo(2);
  }

}
