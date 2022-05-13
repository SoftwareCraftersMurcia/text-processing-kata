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
  void given_two_different_words_then_word_count_is_two() {
    String givenTwoWords = "one two";

    TextAnalyzed textAnalyzed = textProcessor.analyse(givenTwoWords);

    then(textAnalyzed.wordCount()).isEqualTo(2);
  }

  @Test
  void given_two_different_words_then_top_ten_has_two_words() {
    String givenTwoWords = "one two";

    TextAnalyzed textAnalyzed = textProcessor.analyse(givenTwoWords);

    then(textAnalyzed.topWords()).containsExactly("one", "two");
  }

  @Test
  void given_one_repetition_word_then_is_ordered_correct() {
    String givenTwoWords = "two one one";

    TextAnalyzed textAnalyzed = textProcessor.analyse(givenTwoWords);

    then(textAnalyzed.topWords()).containsExactly("one", "two");
  }

}
