package com.katas.java;

import org.junit.jupiter.api.Test;

import static org.assertj.core.api.Assertions.assertThat;

public class TextProcessorTest {

  @Test
  public void should_count_0_words_when_text_is_empty() {
    TextProcessor textProcessor = new TextProcessor();

    TextAnalyzed textAnalyzed = textProcessor.analyse("");

    assertThat(textAnalyzed.wordCount()).isEqualTo(0);
  }

  @Test
  public void should_empty_top_words_when_text_is_empty() {
    TextProcessor textProcessor = new TextProcessor();

    TextAnalyzed textAnalyzed = textProcessor.analyse("");

    assertThat(textAnalyzed.topWords()).isEmpty();
  }
}
