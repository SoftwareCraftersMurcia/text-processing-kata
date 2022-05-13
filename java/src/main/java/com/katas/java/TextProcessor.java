package com.katas.java;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Map;
import java.util.function.Function;
import java.util.stream.Collectors;

public final class TextProcessor {

  public static final String WORD_SEPARATOR = " ";

  public TextAnalyzed analyse(String text) {

    Map<String, Long> wordsCount = Arrays.stream(text.split(WORD_SEPARATOR))
                                         .filter(word -> !word.isEmpty())
                                         .collect(Collectors.groupingBy(Function.identity(), Collectors.counting()));

    long numberOfwords = wordsCount.values()
                                   .stream()
                                   .mapToLong(Long::longValue)
                                   .sum();

    List<String> wordSorted = wordsCount.entrySet()
                                        .stream()
                                        .sorted((o1, o2) -> o2.getValue()
                                                              .compareTo(o1.getValue()))
                                        .map(Map.Entry::getKey)
                                        .collect(Collectors.toList());

    return new TextAnalyzed(numberOfwords, wordSorted);
  }

}
