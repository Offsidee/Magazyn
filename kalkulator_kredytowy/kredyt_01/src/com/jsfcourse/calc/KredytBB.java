package com.jsfcourse.calc;

import javax.inject.Inject;
import javax.inject.Named;
import javax.enterprise.context.RequestScoped;
import javax.enterprise.context.SessionScoped;
import javax.faces.application.FacesMessage;
import javax.faces.context.FacesContext;

@Named
@RequestScoped
//@SessionScoped
public class KredytBB {
	private String kwota;
	private String ile_lat;
	private String procent;
	private Double result;

	
	
	
	
	public String getKwota() {
		return kwota;
	}

	public void setKwota(String kwota) {
		this.kwota = kwota;
	}

	public String getIle_lat() {
		return ile_lat;
	}

	public void setIle_lat(String ile_lat) {
		this.ile_lat = ile_lat;
	}

	public String getProcent() {
		return procent;
	}

	public void setProcent(String procent) {
		this.procent = procent;
	}

	public Double getResult() {
		return result;
	}

	public void setResult(Double result) {
		this.result = result;
	}
	
	public String calc() {
		Double kwota = Double.parseDouble(this.kwota);
		Double ile_lat = Double.parseDouble(this.ile_lat);
		Double procent = Double.parseDouble(this.procent);
		result = (kwota+(kwota*ile_lat*procent/100))/ile_lat;
		
		return null;
	}
	
	
	
	
	@Inject
	FacesContext ctx;

	// Go to "showresult" if ok
	

	
}
