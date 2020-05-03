/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;

/**
 *
 * @author bhk
 */
public class HomeForm extends Form {

    Form current;

    public HomeForm() {
        current = this;
        setTitle("Home");
        setLayout(BoxLayout.y());

        add(new Label("Choose an option"));
        Button btnListFeedback = new Button("List Feedback");
        Button btnAddFeedback = new Button("Add Feedback");

        btnListFeedback.addActionListener(e -> new ListFeedbackForm(current).show());
        btnAddFeedback.addActionListener(e -> new AddFeedbackForm(current).show());

        addAll(btnListFeedback, btnAddFeedback);

    }

}
